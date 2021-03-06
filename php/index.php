<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["myfile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
// $check = getimagesize($_FILES["myfile"]["tmp_name"]);
$check = true;
if ($check !== false) {
  // echo "File is an image - " . $check["mime"] . ".";
  $uploadOk = 1;
} else {
  echo "File is not an image.";
  $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "h264") {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $file_name = time() . '.' . $imageFileType;
  $target_file = $target_dir . $file_name;

  if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
    // echo "The file ". basename( $_FILES["myfile"]["name"]). " has been uploaded.";
    echo "UPLOADED";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
