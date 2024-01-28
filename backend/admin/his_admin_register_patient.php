<!--Server side code to handle  Patient Registration-->
<?php
	session_start();
	include('assets/inc/config.php');
    
        if (isset($_POST['add_patient'])) {
            $pat_fname = $_POST['pat_fname'];
            $pat_lname = $_POST['pat_lname'];
            $pat_number = $_POST['pat_number'];
            $pat_phone = $_POST['pat_phone'];
            $pat_age = $_POST['pat_age'];
            $pat_dob = $_POST['pat_dob'];

            
            $prnt_fname = $_POST['prnt_fname'];
            $prnt_lname = $_POST['prnt_lname'];
            $prnt_email = $_POST['prnt_email'];
            $prnt_pwd=sha1(md5($_POST['prnt_pwd']));
            
        
            // sql to insert captured values
            $query = "INSERT INTO his_patients (pat_fname, pat_lname, pat_number, pat_phone, pat_age, pat_dob, prnt_fname, prnt_lname,  prnt_email, prnt_pwd, prnt_dpic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
            // Prepare the statement
            $stmt = $mysqli->prepare($query);
        
            // Check for prepare error
            if ($stmt === false) {
                die('Prepare Error: ' . $mysqli->error);
            }
        
            // Bind parameters to the statement
            $bindResult = $stmt->bind_param('sssssssssss', $pat_fname, $pat_lname, $pat_number, $pat_phone, $pat_age, $pat_dob, $prnt_fname, $prnt_lname,  $prnt_email, $prnt_pwd, $prnt_dpic);
        
            // Check for bind_param error
            if ($bindResult === false) {
                die('Binding Parameters Error: ' . $stmt->error);
            }
        
            // Execute the statement
            $result = $stmt->execute();
        
            // Check for execution error
            if ($result === false) {
                die('Execute Error: ' . $stmt->error);
            }
        
            if ($result) {
                $success = "Student Details Added";
            } else {
                $err = "Please Try Again Or Try Later";
            }
        
            // Close the statement
            $stmt->close();
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
                                        <h4 class="header-title">Student Details</h4>
                                        <!--Add Patient Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Student's First Name</label>
                                                    <input type="text" required="required" name="pat_fname" class="form-control" id="inputEmail4" placeholder="Student's First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Student's Last Name</label>
                                                    <input required="required" type="text" name="pat_lname" class="form-control"  id="inputPassword4" placeholder="Student`s Last Name">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Student's Date Of Birth</label>
                                                    <input type="text" required="required" name="pat_dob" class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Student's Age</label>
                                                    <input required="required" type="text" name="pat_age" class="form-control"  id="inputPassword4" placeholder="Student`s Age">
                                                </div>
                                            </div>

                                            <h4 class="header-title">Parent's Details</h4>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="col-form-label">Parent's First Name</label>
                                                    <input required="required" type="text" name="prnt_fname" class="form-control" id="inputCity" placeholder = "Parent's First Name">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="col-form-label">Parent's Last Name</label>
                                                    <input required="required" type="text" name="prnt_lname" class="form-control" id="inputCity" placeholder = "Parent's Last Name">
                                                </div>
                                            </div>
                                            <div class = "form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="col-form-label">Parent Email</label>
                                                    <input required="required" type="text" name="prnt_email" class="form-control" id="inputCity" placeholder = "abcxyz@mail.com">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity" class="col-form-label">Parent's Mobile Number</label>
                                                    <input required="required" type="text" name="pat_phone" class="form-control" id="inputCity" placeholder = "Guardian's mobile number">
                                                </div>
                                                
                                            </div>
                                            <div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputpassword" class="col-form-label">Parent's Password</label>
                                                    <input required="required" type="password" name="prnt_pwd" class="form-control" id="inputpassword" placeholder = "Guardian's password">
                                                </div>
                                            </div>
                                                <div class="form-group col-md-2" style="display:none">
                                                    <?php 
                                                        $length = 5;    
                                                        $pat_number =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                                    ?>
                                                    <label for="inputZip" class="col-form-label">Student Number</label>
                                                    <input type="text" name="pat_number" value="<?php echo $pat_number;?>" class="form-control" id="inputZip">
                                                </div>
                                                

                                            <button type="submit" name="add_patient" class="ladda-button btn btn-primary" data-style="expand-right">Add Student</button>

                                        </form>
                                        <!--End Patient Form-->
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