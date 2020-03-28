<?php
$email = "";
if ( isset( $_POST['submit'] )){
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
}
session_start();
$_SESSION["fname"] = $fname;
$_SESSION["lname"] = $lname;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;


$data = array("email" => $_SESSION["email"], "password" => $_SESSION["password"],"fname" => $_SESSION["fname"],"lname" => $_SESSION["lname"]);
$data_string = json_encode($data);

$ch = curl_init('http://localhost:3000/employer/signup');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
$someObject = json_decode($result,true);
echo $result;
header('Location: http://localhost/bvcvfe/lerpagelogin.html');
?>
