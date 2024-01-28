<?php
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();

$pat_id = $_SESSION['pat_id'];

$ret = "SELECT * FROM his_patients WHERE pat_id=?";
$stmt = $mysqli->prepare($ret);
$stmt->bind_param('i', $pat_id);
$stmt->execute();
$res = $stmt->get_result();

if ($row = $res->fetch_object()) {
    $mobileNumber = '919486733915';
    
    // Nexmo SMS API code
    $basic  = new \Vonage\Client\Credentials\Basic("29a20a97", "grPDtJsWQUnN39rl");
    $client = new \Vonage\Client($basic);

    $response = $client->sms()->send(
        new \Vonage\SMS\Message\SMS($mobileNumber, 'BRAND_NAME', 'Your child has been badly injure din the knee, I have given him the necessary treatment')
    );

    $message = $response->current();

    if ($message->getStatus() == 0) {
        echo "The message was sent successfully";
    } else {
        echo "The message failed with status: " . $message->getStatus();
    }
} else {
    echo "Patient not found";
}
?>
