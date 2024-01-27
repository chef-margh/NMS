<?php
$aid = $_SESSION['ad_id'];
$ret = "SELECT * FROM his_admin WHERE ad_id=?";
$stmt = $mysqli->prepare($ret);
$stmt->bind_param('i', $aid);
$stmt->execute();
$res = $stmt->get_result();
//$cnt=1;
while ($row = $res->fetch_object()) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Page Title -->
        <title>Nurse's Management System</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

        <!-- CSS Files -->
        <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
        <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
        <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
        <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
        <link rel="stylesheet" href="assets/css/linearicons.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <!-- Preloader Starts -->
        <div class="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader End -->

        <!-- Header Area Starts -->
        <header class="header-area">
            <div id="header" id="home">
                <div class="container">
                    <div class="row align-items-center justify-content-between d-flex">
                        <div id="logo">
                            <a href="his_admin_dashboard.php"></a>
                        </div>
                        <nav id="nav-menu-container">
                            <ul class="nav-menu">
                                <li class="menu-active"><a href="his_admin_dashboard.php">Home</a></li>
                                <li><a href="backend/doc/index.php">Nurses Login</a></li>
                                <li><a href="backend/admin/index.php">Admin Login</a></li>
                            </ul>
                        </nav><!-- #nav-menu-container -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- ... Your other HTML content ... -->

        <!-- Javascript -->
        <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <script src="assets/js/vendor/owl-carousel.min.js"></script>
        <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
        <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
        <script src="assets/js/vendor/superfish.min.js"></script>
        <script src="assets/js/main.js"></script>

        <!-- Additional script for dropdown initialization -->
        <script>
            $(document).ready(function () {
                // Dropdown Initialization
                $('.dropdown-toggle').dropdown();
            });
        </script>

    </body>

    </html>
<?php } ?>
