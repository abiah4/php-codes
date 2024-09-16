<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>advanced</title>
</head>
<body>
    <h1>contact form with validation</h1>
    <lable for="name">Name:</lable>
    <input type= "text" id="name" name="name" required>
    <br><br>
    <lable for="email">Email:</lable>
    <input for="email" id="email" name="email" required>
<br><br>
<lable for="message">Message:</lable>
<textarea id="message" name="message" rows="4" cols="50" required></textarea>
<br><br>
<input type="submit" value="submit">
</form>
<br>
<a href="logout.php">Logout</a>

<?php

session_start(); //start

//collect form data
    if($_SERVER[REQUEST_MEHTOD]== "POST"){

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

//validate data
if(empty($name)||empty($email)||empty($message)){
    $_SESSION['error'] = "all fields are required";
    header("Location: index.html");
    exit();
} else {
$_SESSION['name']= $name;
$_SESSION['email']= $email;
$_SESSION['message'] = $message;
$_SESSION['error']= "";
header("Location: success.php");
exit();
} else {
    header("Location: index.html");
    exit();
}
    }
</body>
</html>