<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location:Home.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>₠vent Management</title>
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap-5.1.0-dist/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <style>
        body {
            text-align: center;
            background-image: url('./img//green.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>

</head>

<body class="d-flex flex-column vh-100">
    <?php
    include 'includes/header.php';
    ?>
    <div class="container mt-auto">
        <div class="mx-5">
            <h1>Online Event Management System</h1>
            <a class="btn btn-danger btn-lg active" href="Home.php">Welcome</a>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>

</body>

</html>