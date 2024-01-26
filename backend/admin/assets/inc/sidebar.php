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

                    <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-doctor"></i>
                                    <span> Nurses </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_employee.php">Add Nurse</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_employee.php">View Nurses</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_employee.php">Manage Nurses</a>
                                    </li>
                                  
                            </li>

                        <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-pill"></i>
                                    <span> Pharmacy </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_pharm_cat.php">Add Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_pharm_cat.php">View Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_pharm_cat.php">Manage Pharm Category</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_pharmaceuticals.php">Add Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_pharmaceuticals.php">View Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_pharmaceuticals.php">Manage Pharmaceuticals</a>
                                    </li>
                                    <hr>
                                 

                          
                                    <hr>
                                    
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" fas fa-funnel-dollar "></i>
                                    <span> Inventory </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li>
                                        <a href="his_admin_pharm_inventory.php">Pharmaceuticals</a>
                                    </li>

                                    <li>
                                        <a href="his_admin_equipments_inventory.php">Assets</a>
                                    </li>
                                    
                                </ul>
                            </li>
                

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-file-text"></i>
                                    <span> Medical Records </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_medical_record.php">Add Medical Record</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_medical_record.php">Manage Medical Records</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-flask"></i>
                                    <span> Report </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_patient_lab_test.php">Student Ailment</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_lab_result.php">Treatment Given</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_lab_vitals.php">Incident Report</a>
                                    </li>
                                    
                                    <li>
                                        <a href="his_admin_lab_report.php">Lab Reports</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_lab_equipment.php">Add Lab Equipment</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_lab_equipment.php">Manage Lab Equipments</a>
                                    </li>
                                </ul>
                            </li>

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
