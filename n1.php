<?php 

session_start();

function greet($name){
    return "Hello, " . htmlspecialchars($name) . "!";
}

$message = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $name = trim($_POST['name']?? '');
    $age = (int) ($_POST['age']?? 0);
    $hobbies = isset ($_POST['hobbies'])? $_POST ['hobbies'] : [];

    if(empty($name)){
        $errors[] = "Name is required.";
    } 
    if ($age <= 0){
        $errors [] = "Please enter a vaild age.";
    }

    if(empty($errors)){
        $_SESSION['name']= $name;
        $_SESSION['age']= $age;
        $_SESSION['hobbies'] = $hobbies;

        $message = greet($name);

        $message  = "<br> you are " . ($age >= 18 ? "An adult." : "A minor");

    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
<h1>User Information</h1>
<form method="post" action="">
<label for ="name"> Name:</label>
<input type="text" name="name"?  id="name" required value="<?php echo htmlspecialchars($name ?? ''); ?>">
<br>

<label for="age">Age:</label>
<input type="number" name="age" id="age" required value="<?php echo htmlspecialchars($age ?? ''); ?>">
<br>

<label for="hobbies">Hobbies:</label><br>
<input type="checkbox" name="hobbies[]" value="Reading" <?php echo in_array("Reading", $hobbies ?? []) ? 'checked' : ''; ?>> Reading<br>
<input type="checkbox" name="hobbies[]" value="Traveling" <?php echo in_array("Traveling", $hobbies ?? []) ? 'checked' : ''; ?>> Traveling<br><input type="checkbox" name="hobbies[]" value="Sports" <?php echo in_array("Sports", $hobbies ?? []) ? 'checked' : ''; ?>> Sports<br>
<input type="checkbox" name="hobbies[]" value="Music" <?php echo in_array("Music", $hobbies ?? []) ? 'checked' : ''; ?>> Music<br>

<br>
<input type="submit" value="Submit">
</form>

<?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <il><?php echo $error; ?> </il>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

<?php if (isset($_SESSION['name'])): ?>
    <h2>Your Submitted Data</h2>
    <p>Name: <?php echo htmlspecialchars($_SESSION['name']); ?></p>
    <p>Age: <?php echo $_SESSION['age']; ?></p>
    <p>Hobbies: <?php echo !empty($_SESSION['hobbies']) ? implode(", ", $_SESSION['hobbies']) : "None"; ?></p>
<?php endif; ?>
</body>
</html>

<?php
// Clear session data on page reload
if ($_SERVER["REQUEST_METHOD"] == "GET") {
unset($_SESSION['name'], $_SESSION['age'], $_SESSION['hobbies']);
}
?>