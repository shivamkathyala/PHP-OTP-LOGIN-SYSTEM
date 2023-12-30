<?php
require('connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    
    //echo $email;
    
} else {
    //echo "Email not provided in the POST request.";
}

$sql = "SELECT * FROM otp WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if($count>0){
    $otp = rand(11111,99999);
    $sql = "UPDATE otp set otp='$otp' where email='$email'";
    $result = mysqli_query($conn,$sql);
    $getotp = "SELECT * FROM otp WHERE email = '$email'";
    $getotpres = mysqli_query($conn, $getotp);
    $otprow = mysqli_fetch_assoc($getotpres);
    $count2 = mysqli_num_rows($getotpres);
    if($count2>0){
        $response = array('status' => 'Yes', 'otp' => $otp);
        echo json_encode($response);
    }
}else{
    $response = array('status' => 'Not Exist');
        echo json_encode($response);
}
}
?>
