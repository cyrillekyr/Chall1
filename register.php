<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Day Register</title>
    <style>
        body {
            background: url('love.jpeg');
            /*background-color: #ffcccc;*/
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        input[type="text"], input[type="password"] {
            width: 200px;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            background-color: #ff6699;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="register_process.php" method="post">
        <h2>Register</h2>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Register">
    </form>
    <br>
    <p>Already have an account? <a href="index.php">Login</a></p>
</body>
</html>
