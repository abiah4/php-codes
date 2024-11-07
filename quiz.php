<?php
session_start();

$users = [
    'user1' => 'password1',
    'user2' => 'password2',
];

$quiz = [
    'What is the capital of France?' => [
        'a' => 'Berlin',
        'b' => 'Madrid',
        'c' => 'Paris',
        'd' => 'Rome',
        'answer' => 'c',
    ],
    'What is 2 + 2?' => [
        'a' => '3',
        'b' => '4',
        'c' => '5',
        'd' => '6',
        'answer' => 'b',
    ],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!array_key_exists($username, $users)) {
        $users[$username] = $password;
        echo "User registered successfully!";
    } else {
        echo "Username already exists!";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        echo "Login successful! Welcome, $username.";
    } else {
        echo "Invalid username or password!";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['quiz'])) {
    $score = 0;
    foreach ($quiz as $question => $data) {
        if (isset($_POST[$question]) && $_POST[$question] === $data['answer']) {
            $score++;
        }
    }
    echo "Your score: $score out of " . count($quiz);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration and Quiz</title>
</head>
<body>

<h2>Register</h2>
<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" name="register" value="Register">
</form>

<h2>Login</h2>
<form method="POST">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" name="login" value="Login">
</form>

<?php if (isset($_SESSION['username'])): ?>
    <h2>Quiz</h2>
    <form method="POST">
        <?php foreach ($quiz as $question => $data): ?>
            <fieldset>
                <legend><?php echo $question; ?></legend>
                <?php foreach ($data as $key => $value): ?>
                    <?php if ($key !== 'answer'): ?>
                        <label>
                            <input type="radio" name="<?php echo $question; ?>" value="<?php echo $key; ?>" required>
                            <?php echo $value; ?>
                        </label><br>
                    <?php endif; ?>
                <?php endforeach; ?>
            </fieldset>
        <?php endforeach; ?>
        <input type="submit" name="quiz" value="Submit Quiz">
    </form>
<?php endif; ?>

</body>
</html>
