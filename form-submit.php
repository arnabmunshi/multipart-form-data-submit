<?php
require 'connection.php'; // called by ajax

$name = mysqli_real_escape_string($dbcon, $_POST['name']);
$file_name_with_ex = $_FILES['file']['name'];
$file_temp_name = $_FILES['file']['tmp_name'];

$file_name_array = explode('.', $file_name_with_ex);
$file_name = time();
$file_ex = strtolower($file_name_array[1]);
$filename = $file_name.'.'.$file_ex;

$sql = "INSERT INTO user_details (name, filename) VALUES('$name', '$filename')";
if(mysqli_query($dbcon, $sql)) {
  move_uploaded_file($file_temp_name, 'upload/'.$filename);
  echo 'Saved';
} else {
  echo 'Error: '.mysqli_error($dbcon);
}

mysqli_close($dbcon);