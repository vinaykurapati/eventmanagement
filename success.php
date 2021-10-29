<?php
include "includes/common.php"
?>
<!DOCTYPE html>
<html>

<head>
    <title>Available Events</title>
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="bootstrap-5.1.0-dist/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <style>
        footer {
            color: #6a6c6d;
        }

        p a {
            text-decoration: none;
        }
    </style>
</head>

<body class="d-flex flex-column vh-100">
    <?php
    include 'includes/header.php';
    ?>

    <div class="container">
        <div class=" my-5 row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <?php
                    if (isset($_GET["err"])) {
                        echo $_GET['err'];
                    } else if (isset($_GET["msg"])) {
                        echo $_GET['msg'];
                    }
                    ?>
                </div>
                <hr>
                <div>
                    <?php
                    if (isset($_GET["det"])) {
                        echo $_GET['det'];
                    }
                    ?>
                </div>
                <div class="text-center">
                    <a href="Home.php" class="btn btn-warning" style="width: 100px;">OK</a>
                </div>
            </div>
        </div>
    </div>


    <?php
    include 'includes/footer.php';
    ?>


</body>

</html>