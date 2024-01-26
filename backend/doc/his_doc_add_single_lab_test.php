<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_patient_lab_test']))
		{
			$lab_pat_name = $_POST['lab_pat_name'];
            $lab_pat_number  = $_POST['lab_pat_number'];
            $lab_pat_tests = $_POST['lab_pat_tests'];
            $lab_date_rec = $_POST['lab_date_rec'];
            //$pres_number = $_POST['pres_number'];
            //$pres_ins = $_POST['pres_ins'];
            //$pres_pat_ailment = $_POST['pres_pat_ailment'];
            //sql to insert captured values
			$query="INSERT INTO  his_laboratory  (lab_pat_name, lab_pat_number, lab_pat_tests, lab_date_rec) VALUES(?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('ssss', $lab_pat_name,$lab_pat_number, $lab_pat_tests, $lab_date_rec);
			$stmt->execute();
			/*
			
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Patient Laboratory Tests Addded";
			}
			else {
				$err = "Please Try Again Or Try Later";
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
                $pat_number = $_GET['pat_number'];
                $ret="SELECT  * FROM his_patients WHERE pat_number=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('s',$pat_number);
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
                                                <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="his_doc_patient_lab_test.php">Student's Ailments</a></li>
                                                <li class="breadcrumb-item active">Add Student's Ailment</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Add Student's Ailment</h4>
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
                                                        <input type="text" required="required" readonly name="lab_pat_name" value="<?php echo $row->pat_fname;?> <?php echo $row->pat_lname;?>" class="form-control" id="inputEmail4" placeholder="Student's  Name">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4" class="col-form-label">Student's Roll Number</label>
                                                        <input type="text" required="required" name="lab_pat_number" value="<?php echo $row->pat_number;?>" class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                                    </div>


                                                   

                                                </div>

                                                <div class="form-row">

                                                    <div class="form-group col-md-6">
                                                            <label for="inputEmail4" class="col-form-label">Date of Report</label>
                                                            <input type="text" required="required" name="lab_pat_number" value="<?php echo $row->pat_number;?>" class="form-control" id="inputEmail4" placeholder="DD/MM/YYYY">
                                                    </div>

                                                    

                                                </div>

                                                <hr>

                                                

                                                <div class="form-group">
                                                        <label for="inputAddress" class="col-form-label">Ailment Description</label>
                                                        <textarea required="required"  type="text" class="form-control" name="lab_pat_tests" id="editor"></textarea>
                                                </div>

                                                <button type="submit" name="add_patient_lab_test" class="ladda-button btn btn-success" data-style="expand-right">Add Ailment Report</button>

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