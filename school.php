<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type=text name="firstname" placeholder="please enter your firstname"/>
    <input type=text name="lastname" placeholder="please enter your Lastname"/>
    <input type=text name="fathername" placeholder="please enter your fathername"/>
    <input type=text name="mothername" placeholder="please enter your mothername"/>
    <input type=number name="dob" placeholder="please enter your DOB"/>
    <input type=email name="email" placeholder="please enter your email"/>
    <input type=address name="address" placeholder="please enter your address"/>
    <button type="submit">submit</button>
        </form>

    <?php
    // $firstname=$_POST["firstname"];
    // $lastname=$_POST["lastname"];
    // $fathername=$_POST["fathername"];
    //  $mothername=$_POST["mothername"];
    //  $dob=$_POST["dob"];
    //  $email=$_POST["email"];
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = test_input($_POST["firstname"]);
        $lastname=test_input($_POST["lastname"]);
        $fathername=test_input($_POST["fathername"]);
        $mothername=test_input($_POST["mothername"]);
        $dob=test_input($_POST["dob"]);
        $email = test_input($_POST["email"]);
        $address = test_input($_POST["address"]);


        if($dob<2000){
echo"your are not aply this form";
die;
        }
    if(empty($firstname)||empty($fathername)&&empty($mothername)||empty($dob)||empty($email)||empty($address)){
        echo "please fill your form crectly";
        die;
        $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
  die;
}
    }
    else{
        echo"thanks for comming";
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  }
     ?>
</body>
</html>