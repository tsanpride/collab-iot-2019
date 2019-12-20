<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank Hore</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
    <h1>Hello, <?php echo $_SESSION['username'] ?> !!! <br> Selamat Datang di Lord Jalal Smartdoor</h1> 
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </p>
</body>
</html>