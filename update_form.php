<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
include 'Database.php';
include 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $matric = htmlspecialchars(strip_tags($_GET['matric']));

    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);
    $userDetails = $user->getUser($matric);

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update User</title>
    </head>

    <body>
    <h1>Update User</h1>
    <form action="update.php" method="post">
        <label for="matric">Matric</label>
        <input type="text" id="matric" name="matric"><br><br>
        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="role">Access Level</label>
        <select id="role" name="role">
            <option value="student" selected>Student</option>
            <option value="lecturer">Lecturer</option>
        </select><br><br>
        <input type="submit" value="Update">
        <a href="read.php">Cancel</a>
    </form>
    </body>

    </html>
    <?php
}
?>