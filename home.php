<?php
 session_start();
 if(!isset($_SESSION['$username'])){
     header('location:login.php');
 }
?>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <a class="float-right" href="logout.php">LOGOUT</a>
    
    <h1>Welcome <?php echo $_SESSION['$username']; ?></h1>
    
    </div>
</body>
</html>