<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <!-- <?php
   echo readfile("php.txt")
   ?> -->
<!-- 
     <?php
   $myfile=fopen("php.txt","a") or die("this is not able");
   $txt = "heloo manj";
   fwrite($myfile , $txt);
   $txt = "heloo manj";
   fwrite($myfile , $txt);
   fclose($myfile);
   ?>  -->

<!-- <form action="school.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form> -->

<form action="photo.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>