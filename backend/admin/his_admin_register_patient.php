<!--Server side code to handle Patient Registration-->
<?php
session_start();
include('assets/inc/config.php');

$success = $err = '';

if (isset($_POST['add_patient'])) {
    // Validate form data
    if (
        isset($_POST['pat_fname'], $_POST['pat_lname'], $_POST['pat_dob'], $_POST['pat_age'], $_POST['pat_number'], $_POST['pat_phone'], $_POST['pat_phone2'])
        && !empty($_POST['pat_fname'])
        && !empty($_POST['pat_lname'])
        && !empty($_POST['pat_dob'])
        && !empty($_POST['pat_age'])
        && !empty($_POST['pat_number'])
        && !empty($_POST['pat_phone'])
        && !empty($_POST['pat_phone2'])
    ) {
        // Sanitize input data
        $pat_fname = $_POST['pat_fname'];
        $pat_lname = $_POST['pat_lname'];
        $pat_dob = $_POST['pat_dob'];
        $pat_age = $_POST['pat_age'];
        $pat_number = $_POST['pat_number'];
        $pat_phone = $_POST['pat_phone'];
        $pat_phone2 = $_POST['pat_phone2'];

        
        // SQL to insert captured values
        $query = "INSERT INTO his_patients (pat_fname, pat_lname, pat_age, pat_dob, pat_number, pat_phone, pat_phone2) VALUES (?, ?, ?, ?,?,?,?)";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('sssssss', $pat_fname, $pat_lname, $pat_age, $pat_dob, $pat_number, $pat_phone, $pat_phone2);
        $stmt->execute();

        if ($stmt->execute()) {
            $success = "Student Details Added";
        } else {
            $err = "Error: " . $stmt->error;
        }
    } else {
        $err = "Please fill in all required fields.";
    }
}
?>

<!--End Server Side-->
<!--End Patient Registration-->
<!DOCTYPE html>
<html lang="en">

<!--Head-->
<?php include('assets/inc/head.php');?>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include("assets/inc/nav.php");?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include("assets/inc/sidebar.php");?>
        <!-- Left Sidebar End -->
                                                                                            
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Students</a></li>
                                        <li class="breadcrumb-item active">Add Student</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Student Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Fill all fields</h4>
                                    <!--Add Patient Form-->
                                    <form method="post">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">First Name</label>
                                                <input type="text" required="required" name="pat_fname" class="form-control" id="inputEmail4"
                                                    placeholder="Student's First Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Last Name</label>
                                                <input required="required" type="text" name="pat_lname" class="form-control" id="inputPassword4"
                                                    placeholder="Student`s Last Name">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">Date Of Birth</label>
                                                <input type="text" required="required" name="pat_dob" class="form-control" id="inputEmail4"
                                                    placeholder="DD/MM/YYYY">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Age</label>
                                                <input required="required" type="text" name="pat_age" class="form-control" id="inputPassword4"
                                                    placeholder="Student`s Age">
                                            </div>
                                            <div class="form-group col-md-6" >
                                            <label for="inputZip" class="col-form-label">Student Roll Number</label>
                                            <input type="text" name="pat_number" class="form-control" id="inputEmail4" placeholder = "Student's Roll Number">
                                            </div>

                                            <div class="form-group col-md-6" >
                                            <label for="inputZip" class="col-form-label">Guardian1's Phone number</label>
                                            <input type="text" name="pat_phone" class="form-control" id="inputZip">
                                            </div>

                                            <div class="form-group col-md-6" >
                                            <label for="inputZip" class="col-form-label">Guardian2's Phone number</label>
                                            <input type="text" name="pat_phone2" class="form-control" id="inputZip" >
                                            </div>

                                            

                                        
                                        </div>

                                        
                                        </div>

                                        <button type="submit" name="add_patient" class="ladda-button btn btn-primary" data-style="expand-right">Add Student</button>

                                    </form>
                                    <!--End Patient Form-->
                                    <?php
                                    if ($success) {
                                        echo '<div class="alert alert-success">' . $success . '</div>';
                                    }
                                    if ($err) {
                                        echo '<div class="alert alert-danger">' . $err . '</div>';
                                    }
                                    ?>
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include('assets/inc/footer.php');?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js-->
    <script src="assets/js/app.min.js"></script>

    <!-- Loading buttons js -->
    <script src="assets/libs/ladda/spin.js"></script>
    <script src="assets/libs/ladda/ladda.js"></script>

    <!-- Buttons init js-->
    <script src="assets/js/pages/loading-btn.init.js"></script>

</body>

</html>
