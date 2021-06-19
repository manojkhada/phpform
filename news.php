<?php
$target_dir="upload";
$target_file=$target_dir . basename($_FILES["filetoupload"]["name"]);

if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file)){
    echo "this file uploaded" . htmlspecialchars(basename($_FILES["filetoupload"]["name"]));
}
else {
    echo "tere is an eror";
}
?>