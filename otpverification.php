<?php

require('connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['otp'])) {
    $otp = $_POST['otp'];   
} 

$sql = "SELECT * FROM otp WHERE otp = '$otp'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
    if ($count > 0) {
        $response = array('status' => 'Yes');
        echo json_encode($response);
    } else {
        $response = array('status' => 'Wrong OTP! Please try again');
        echo json_encode($response);
    }
}
?>

