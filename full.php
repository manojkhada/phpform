<?php
$name=$_POST["name"];
$address=$_POST["address"];
$number=$_POST["number"];
$code=$_POST["code"];

if(empty($name)||empty($address)||empty($number)||empty($code)){
    echo"please full-fill your form";
    die;
}
else{
    echo"thanks for comming";
}
?>