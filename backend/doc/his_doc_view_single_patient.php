<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();

$doc_id = $_SESSION['doc_id'];

if (isset($_POST['sendAlertBtn'])) {
    // Using mail function
    $to = "minecraftparadise007@gmail.com";
    $subject = "Alert Message";
    $message = "This is an alert message from the system.";
    $headers = "From: webmaster@example.com"; // Change this email address

    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Alert message sent successfully using mail function.");</script>';
    } else {
        $error_message = error_get_last()['message'];
        echo '<script>alert("Error sending alert message using mail function. ' . $error_message . '");</script>';
    }

    // Using PHPMailer
    require 'C:\xampp\htdocs\NMS\PHPMailer-master/Exception.php';
    require 'C:\xampp\htdocs\NMS\PHPMailer-master/PHPMailer.php';
    require 'C:\xampp\htdocs\NMS\PHPMailer-master/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $to = "minecraftparadise007@gmail.com";
    $subject = "Alert Message";
    $message = "This is an alert message from the system.";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_username';
        $mail->Password   = 'your_password';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('webmaster@example.com', 'Webmaster');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        echo '<script>alert("Alert message sent successfully using PHPMailer.");</script>';
    } catch (Exception $e) {
        echo '<script>alert("Error sending alert message using PHPMailer. ' . $mail->ErrorInfo . '");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

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

        <!-- Get Details Of A Single User And Display Them Here -->
        <?php
        $pat_number = $_GET['pat_number'];
        $pat_id = $_GET['pat_id'];
        $ret = "SELECT  * FROM his_patients WHERE pat_id=?";
        $stmt = $mysqli->prepare($ret);
        $stmt->bind_param('i', $pat_id);
        $stmt->execute();
        $res = $stmt->get_result();
        while ($row = $res->fetch_object()) {
            $mysqlDateTime = $row->pat_date_joined;
        ?>
            <div class="content-page">
                <div class="content">
                    <!-- Start Content -->
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                            <li class="breadcrumb-item active">View Patients</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"><?php echo $row->pat_fname; ?> <?php echo $row->pat_lname; ?>'s Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <!-- ... (rest of your existing code) ... -->
                                <div class="text-right mt-3">
                                    <form method="post">
                                        <button type="submit" class="btn btn-primary" name="sendAlertBtn">Send Alert Message</button>
                                    </form>
                                </div>
                                <!-- ... (rest of your existing code) ... -->
                            </div> <!-- end col -->
                            <?php } ?>
                            <div class="col-lg-8 col-xl-8">
                                <!-- ... (rest of your existing code) ... -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
                <!-- Footer Start -->
                <?php include('assets/inc/footer.php'); ?>
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
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>
