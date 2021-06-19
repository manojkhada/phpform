<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
$x=$_POST["number"];
$y=$_POST["password"];
if(empty($x)||empty($y)){
    echo"this form is not complete";
    die;
}
else{
    echo"welcome to over account";
}
   ?>
</body>
</html>