<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
  $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
}
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  echo nl2br("\n");
  $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  echo nl2br("\n");
  $uploadOk = 0;
}
if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx"
&& $imageFileType != "txt" ) {
  echo "Sorry, only PDF, DOC, DOCX & TXT files are allowed.";
  echo nl2br("\n");
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  echo nl2br("\n");
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	echo nl2br("\n");
  } else {
    echo "Sorry, there was an error uploading your file.";
	echo nl2br("\n");
  }
}
?>