<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>ItechPro</title>
</head>
<body>
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="../neoindex/neoindex.php" class="site_title"><img style="width:55px" src="images/logo_codelco.png" alt=""><span>&nbsp;APPSVP</span></a>
                    </div>
                    <div class="clearfix"></div>
                        <!-- sidebar menu -->
                        <?php include 'includes/sidebar_apps.php'; ?>
                </div>
            </div>
            <?php
                include 'includes/top-navigation_apps.php';
            ?>
        </div>
    </div>

</body>
<script src="./js/jquery-3.2.1.slim.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</html>
