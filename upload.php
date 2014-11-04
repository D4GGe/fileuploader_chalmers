<?php
$target_dir = "uploads/";
var_dump($_FILES);
$target_file = $target_dir . basename($_FILES["file1"]["name"]);


// Check if image file is a actual image or fake image
move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)
?>