<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
    background: url('heart.jpeg');
    font-family: Arial, sans-serif;
    /*background-color: #ffcccc;*/
    text-align: center;
    padding-top: 50px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #ff6699;
}

p {
    margin-bottom: 20px;
}

a {
    color: #ff6699;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

.logout-btn {
    background-color: #ff6699;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.logout-btn:hover {
    background-color: #e65c8e;
}

        </style>
</head>
<body>
    <script > alert('LoveCTF{l37_4u7h3n71c473_m0r3_s3cur3ly_0ur_h34r7}')</script>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
