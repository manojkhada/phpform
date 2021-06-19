<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post" >
<input type="email" name="email" placeholder="please enter your email" />
<input type="password" name="password" placeholder="please enter your password" />
<button type="submit" >login</button>
</form>
    <?php
   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    setcookie("email", $email, time() + (86400 * 30), "/"); // 86400 = 1 day

    if(!isset($_COOKIE["email"])) {
        echo "Cookie named '" . $email . "' is not set!";
      } else {
        // echo "Cookie '" . $email . "' is set!<br>";
        echo "Value is: " . $_COOKIE["email"];
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