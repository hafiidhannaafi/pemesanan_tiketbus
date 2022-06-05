<?php
error_reporting(0);
  // Menangkap isi variabel dari file yang telah kita isi pada join member
  $nama = $_POST['nama'];
  $Email = $_POST['Email'];
  $ttl = $_POST['ttl'];
  $telp = $_POST['telp'];
  $alamat = $_POST['alamat'];
  $jeniskelamin = $_POST['jeniskelamin'];

  // Format data yang akan diparsing
  $data = "-----------
  \n  $nama
  $Email
  $ttl
  $telp
  $alamat
  $jeniskelamin
  -------------";

  // Buka file noted.txt, kemudian tuliskan isi variabel di atas kedalam noted.txt
  $fh = fopen("noted.txt", "a");
  fwrite($fh, $data);

  // Tutup file
  fclose($fh);

  // Keterangan bila data berhasil di input
  print "BERHASIL MENGUPLOAD 
  </br><a href='index.php'> Kembali ke Index >></a>";

?>

<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "  file sudah ada";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "file anda terlalu besar";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "  hanya JPG, JPEG, PNG & GIF file yang diperbolehkan";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo " file anda belum terupload";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " sudah terupload";
  } else {
    echo " terdapat kesalahan dalam mengupload";
  }
}
?>