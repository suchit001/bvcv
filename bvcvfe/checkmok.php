<?php
$email = "";
if ( isset( $_POST['submit'] )){
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
}
session_start();
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;



$data = array("email" => $_SESSION["email"], "password" => $_SESSION["password"]);
$data_string = json_encode($data);

$ch = curl_init('http://localhost:3000/employee/login');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
$someObject = json_decode($result,true);
$_SESSION["reps"] = $someObject[0]["rep"];
$_SESSION["fname"] = $someObject[0]["fname"];
$_SESSION["lname"] = $someObject[0]["lname"];
$_SESSION["email"] = $someObject[0]["email"];
$_SESSION["resume"] = $someObject[0]["resume"];

echo $result;
header('Location: http://localhost/bvcvfe/index.php');
?>
