<?php
    session_start();
    include('assets/inc/config.php');

    if (isset($_POST['add_patient_lab_result'])) {
        // Form validation and sanitation can be added here

        $lab_pat_name = $_POST['lab_pat_name'];
        $lab_pat_number = $_POST['lab_pat_number'];
        $lab_pat_tests = $_POST['lab_pat_tests'];
        $lab_number = $_GET['lab_number'];
        $lab_pat_results = $_POST['lab_pat_results'];

        // SQL to insert captured values
        $query = "UPDATE his_laboratory SET lab_pat_name=?, lab_pat_number=?, lab_pat_tests=?, lab_pat_results=? WHERE lab_number=?";
        $stmt = $mysqli->prepare($query);
        $rc = $stmt->bind_param('sssss', $lab_pat_name, $lab_pat_number, $lab_pat_tests, $lab_pat_results, $lab_number);
        
        if ($stmt->execute()) {
            // Success handling
            $success = "Patient Laboratory Results Added";
        } else {
            // Error handling
            $err = "Please Try Again Or Try Later: " . $stmt->error;
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
            <?php
                $lab_number = $_GET['lab_number'];
                $ret="SELECT  * FROM his_laboratory WHERE lab_number=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('s',$lab_number);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
                {
            ?>
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
                                                <li class="breadcrumb-item"><a href="his_doc_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="his_doc_patient_lab_result.php">Treatment Given</a></li>
                                                <li class="breadcrumb-item active">Add Treatment Report</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Treatment REport</h4>
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
                                                        <label for="inputEmail4" class="col-form-label">Student Name</label>
                                                        <input type="text" required="required" readonly name="lab_pat_name" value="<?php echo $row->lab_pat_name;?>" class="form-control" id="inputEmail4" placeholder="Patient's First Name">
                                                    </div>

                                                    

                                                </div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="col-form-label">Student Roll Number</label>
                                                        <input type="text" required="required" readonly name="lab_pat_number" value="<?php echo $row->lab_pat_number;?>" class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                                    </div>


                                                </div>

                                                
                                                <hr>
                                                

                                                <div class="form-group">
                                                        <label for="inputAddress" class="col-form-label">Ailment Description</label>
                                                        <textarea required="required"  type="text" class="form-control" name="lab_pat_tests" id="editor"><?php echo $row->lab_pat_tests;?></textarea>
                                                </div>

                                                <div class="form-group">
                                                        <label for="inputAddress" class="col-form-label">Treatment Description</label>
                                                        <textarea required="required"   type="text" class="form-control" name="lab_pat_results" id="editor1"></textarea>
                                                </div>

                                                <button type="submit" name="add_patient_lab_result" class="ladda-button btn btn-success" data-style="expand-right">Add Treatment Report</button>

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
            <?php }?>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
         CKEDITOR.replace('editor')
        </script>
        <script type="text/javascript">
         CKEDITOR.replace('editor1')
        </script>

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