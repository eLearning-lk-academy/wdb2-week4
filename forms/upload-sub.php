<?php

$dir = 'uploads/';
// var_dump($_FILES);
$target_file = $dir . basename($_FILES['file']['name']);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
$check = getimagesize($_FILES['file']['tmp_name']);
if($check !== false) {
    echo 'File is an image - ' . $check['mime'] . '.';
    $uploadOk = 1;
} else {
    echo 'File is not an image.';
    $uploadOk = 0;
}

if ($uploadOk){
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
        echo 'The file ' . basename($_FILES['file']['name']) . ' has been uploaded.';
    } else {
        echo 'Sorry, there was an error uploading your file.';
    }
}