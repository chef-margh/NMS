<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    
    <!-- Include required CSS styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.css">

    <!-- Include required JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js"></script>

    <!-- Initialize MetisMenu -->
    <script>
        $(document).ready(function () {
            $('#side-menu').metisMenu();
        });
    </script>
</head>
<body>
    <div class="left-side-menu">
        <div class="slimscroll-menu">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">Navigation</li>
                    
                    <li>
                        <a href="his_admin_dashboard.php">
                            <i class="fe-airplay"></i>
                            <span> Home </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fab fa-accessible-icon "></i>
                            <span> Students </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="his_admin_register_patient.php">Register Student</a>
                            </li>
                            <li>
                                <a href="his_admin_view_patients.php">View Students</a>
                            </li>
                            <li>
                                <a href="his_admin_manage_patient.php">Manage Students</a>
                            </li>
                        </ul>
                    </li>

                    <!-- ... other menu items ... -->

                    <li>
                        <a href="javascript: void(0);">
                            <i class="fas fa-lock"></i>
                            <span> Password Resets </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="his_admin_manage_password_resets.php">Manage</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->
    </div>
</body>
</html>
