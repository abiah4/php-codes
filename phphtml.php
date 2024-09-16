<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php example</title>
</head>
<body>
    <form method="post" action="">
        <lable for="name">name;</lable>
        <input type="text" id="name" name="name" required>
        <br><br>
        <lable for="email">email;</lable>
        <lable for ="email" id="email" name="name" required>
            <br><br>
            <input type="submit" value="sumbit">
</form>
<?php
if($_SERVER["REQUEST_MEHTOD"]== "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h2>sumbitted information:</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";


}


?>
</body>
</html>