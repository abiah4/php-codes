
<?php

$nameError = "";
$passwordError = "";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username)){
        $nameError = "<br /> Name is Required!!";

    } else {
        $username = trim($username);
        $username = htmlspecialchars($username);
        if(preg_match("/^[a-zA-Z ]+$/" , $username)){
            $nameError = "<br /> name should contain only char and space";
        }
    }


    if(empty($password)){
        $passwordError =  "<br /> Password is Rrquired!!!";
    } else {
        if(strlen($password) <= 8){
            $passwordError = "<br /> at least 8 digits";
        } elseif (!preg_match("#[0-9]+#" , $password)){
            $passwordError = "<br /> at least one digits";
        }elseif (!preg_match("#[a-z]+#" , $password)){
            $passwordError = "<br /> at least one small char";
    } elseif (!preg_match("#[A-Z]+#" , $password)){
        $passwordError = "<br /> at least upper case";
    }
}

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login System</title>
</head>
<body>
    <div class="container">
        <div class="form_container">
            <h3>Login from Validation in PHP</h3>
            <form method="post">
                <p>
                    <label for="name">username:</lable>
                    <input type="text" name="username" placeholder="Enter Name"/>
                    <span style="color: red"> <?php echo $nameError ?> </span>
                </p>
                <p>
                <label for="name">password:</lable>
                <input type="password" name="password" placeholder="Enter password"/>
                <span style="color: red"> <?php echo $passwordError ?> </span>
                </p>
                <button name="submit" name= 'submit'>Login</button>
</from>
</div>
</div>


</body>
</html>