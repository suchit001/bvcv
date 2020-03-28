<?php 
session_start();
	if(isset($_POST['accept'])){
		$val = $_POST['divid'];
		$ans = 1;		
	}
	else if(isset($_POST['reject'])){
		$val = $_POST['divid'];
		$ans = 0;
	}
	$sendemail = $_POST['sendemail'];
	$verifemail = $_SESSION['email'];
	$data = array("email"=>$sendemail,"verifemail"=>$verifemail);
	$data_string = json_encode($data);
	$ch = curl_init('http://localhost:3000/employee/resume');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
$res = json_decode($result,true);
$res["resume"]["workexp"][$res["req"]["val"]]["verif"] = $ans;
$resume = $res["resume"];
// var_dump($res["resume"]);
// var_dump($res["req"]["val"]);
	$data = array("email"=>$sendemail,"resume"=>$resume);
	$data_string = json_encode($data);
	$ch = curl_init('http://localhost:3000/employee/updateres');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
	$data = array("sendemail"=>$sendemail,"verifemail"=>$verifemail);
	$data_string = json_encode($data);
	$ch = curl_init('http://localhost:3000/employer/verifcomplete');
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($ch);
array_splice($_SESSION['verifreqs'], $val,1);
	// 	$sendemail = $_POST['sendemail'];
	// 	$verifemail = $_SESSION['email'];	
	// $data = array("verifemail"=>$verifemail,"sendemail"=>$sendemail,"ans"=>$ans);
header('Location: http://localhost/bvcvfe/testpage.php');

?>