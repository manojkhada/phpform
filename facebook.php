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
$numbers=strlen($x);
$passlen=strlen($y);
if (empty($x)||$numbers<=10){
    echo"please enter your number or email";
    die;
}
elseif(empty($y)|| ($passlen<6)){
    echo"please enter your write password or a valid password";
}
else{
    echo"thanks for coming";
}

  ?>
</body>
</html>