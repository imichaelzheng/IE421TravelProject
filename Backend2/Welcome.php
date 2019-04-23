<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: #login");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<!--    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style> -->
</head>
<body>
    <div class="page-header">
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["company_name"]); ?></b>. Welcome to your company control panel.</h3>
    </div>
    <p>Your current phone number: <?php echo htmlspecialchars($_SESSION["phone"]); ?></p>
    <p>Your current address: <?php echo htmlspecialchars($_SESSION["address"]); ?></p>
    <ul>
		<li><a href="Logout.php">Log Out</a></li>
		<li><a href="#addstore">Add New Restaurant</a></li>
		<li><a href="#">Change Email</a></li>
		<li><a href="#">Change Password</a></li>
    </ul>
</body>
</html>