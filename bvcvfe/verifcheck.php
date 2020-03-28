<?php
session_start();

if ( isset( $_POST['verifsubmit'] )){
	$verifemail = $_REQUEST['verifemail'];
	$description = $_REQUEST['verifdes'];
	$sendemail = $_SESSION["email"];
	$val = $_REQUEST['divid'];
	$wexp = $_SESSION["resume"]["workexp"];
	$workexp = $wexp[$val];
	$data = array("verifemail"=>$verifemail,"description"=>$description,"sendemail"=>$sendemail,"workexp"=>$workexp,"val"=>$val);
	$data_string = json_encode($data);
}
$ch = curl_init('http://localhost:3000/employee/verifreq');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
$someObject = json_decode($result,true);
header('Location: http://localhost/bvcvfe/index.php');

?>