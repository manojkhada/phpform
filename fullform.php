<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type=text name="name" placeholder="please enter your full name"/>
    <input type=text name="email" placeholder="please enter your full email"/>
    <input type=number name="number" placeholder="please enter your number"/>
    <input type="number" name="code"placeholder="please enter digit-code"/>
    <button type="submit">Submit</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $number = test_input($_POST["number"]);
    $code = test_input($_POST["code"]);
   
    if (empty($_POST["email"])) {
        echo"Email is required";
        die;
      } else {
        // $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo "Invalid email format";
        }
        else{
            echo"thamks for comming";
        }
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