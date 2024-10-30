<?php 
$users = [
    ['username'=> 'sara ahamed', 'hobbies' => 'Reading , traveling', 'education'=>'Bachelor of Arts'],
    ['username'=> 'yousef fahad', 'hobbies' => 'Photography', 'education'=>'Master of Science'],
    ['username'=> 'Nada saleh', 'hobbies' => 'Hiking', 'education'=>'Bachelor of Science'],
    ['username'=> 'yumna kreem', 'hobbies' => 'Cooking', 'education'=>'Bachelor of Biology'],
    ['username'=> 'Khalid omar', 'hobbies' => 'Painting', 'education'=>'Bachelor of Mathematics'],

];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Hobbies and Education</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #2980b9;
            color: pink;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #d5dbdb;
        }
    </style>
</head>
<body>

    <h1>User Hobbies and Education</h1>

    <table>
        <tr>
            <th>Username</th>
            <th>Hobbies</th>
            <th>Education</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user['username']); ?></td>
            <td><?php echo htmlspecialchars($user['hobbies']); ?></td>
            <td><?php echo htmlspecialchars($user['education']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html