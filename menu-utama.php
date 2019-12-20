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
        body{ font: 400px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header" style="background-image: url('images/drag.jpg');">
			<div class="wrap-login100 p-t-500 p-b-850">
				<span class="login100-form-title p-b-41">
                    Welcome <br>
                    Welcome <br>
                   
				</span>
            </div>
    </div>

    <h1>Hello, <?php echo $_SESSION['username'] ?> !!! <br> Selamat Datang di Lord Jalal Smartdoor</h1> 
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </p>
</body>
</html>