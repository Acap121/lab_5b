<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registration Page</h1>
    <form action="insert.php" method="post">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="">Please select</option>
            <option value="lecturer">Lecturer</option>
            <option value="student">Student</option>
        </select><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>