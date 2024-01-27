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
                        <a href="index. "></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="index.php">Home</a></li>
                            <li><a href="backend/doc/index.php">Nurses Login</a></li>
                            <li><a href="backend/admin/index.php">Admin Login</a></li>
                        </ul>
                    </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Educate to Innovate!</h4>
                    <h1>Together we can do great things</h1>
                </div>
            </div>
        </div>
    </section>

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

    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0"> 

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/<?php echo $row->ad_dpic; ?>" alt="dpic" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        <?php echo $row->ad_fname; ?> <?php echo $row->ad_lname; ?> <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <a href="his_admin_logout_partial.php" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="his_admin_dashboard.php" class="logo text-center">
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="18">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo-sm-white.png" alt="" height="24">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="his_admin_add_employee.php" class="dropdown-item">
                        <i class="fe-users mr-1"></i>
                        <span>Nurse</span>
                    </a>

                    <!-- item-->
                    <a href="his_admin_register_patient.php" class="dropdown-item">
                        <i class="fe-activity mr-1"></i>
                        <span>Student</span>
                    </a>

                    

                    <!-- item-->
                    <a href="his_admin_add_medical_record.php" class="dropdown-item">
                        <i class="fe-list mr-1"></i>
                        <span>Medical Report</span>
                    </a>

                    <!-- item-->
                    <a href="his_admin_lab_report.php" class="dropdown-item">
                        <i class="fe-hard-drive mr-1"></i>
                        <span>Laboratory Report</span>
                    </a>

                   

                    
                    <div class="dropdown-divider"></div>

                    
                </div>
            </li>

        </ul>
    </div>
<?php }?>

<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>