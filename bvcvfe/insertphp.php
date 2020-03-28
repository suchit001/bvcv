<?php
session_start();

if ( isset( $_POST['edusubmit'] )){
	$var = [];
	foreach($_POST as $name=>$value)
	{
		if($name=="submit")
		{}
	else
	{
		$var[$name]=$value;
	}
	}
	$var["verif"]=0;
	$_SESSION["val"] = $var;
	$resuume = $_SESSION["resume"]["education"];
	array_push($resuume, $var);
	$_SESSION["resume"]["education"] = $resuume;
	$resumee = $_SESSION["resume"];
	$data = array("email" => $_SESSION["email"], "resume" => $_SESSION["resume"]);
	$data_string = json_encode($data);
}

if ( isset( $_POST['workexsubmit'] )){
	$var = [];
	foreach($_POST as $name=>$value)
	{
		if($name=="submit")
		{}
	else
	{
		$var[$name]=$value;
	}
	}
	$var["verif"]=0;
	$_SESSION["val"] = $var;
	$resuume = $_SESSION["resume"]["workexp"];
	array_push($resuume, $var);
	$_SESSION["resume"]["workexp"] = $resuume;
	$resumee = $_SESSION["resume"];
	$data = array("email" => $_SESSION["email"], "resume" => $_SESSION["resume"]);
	$data_string = json_encode($data);
}

if ( isset( $_POST['leadrosubmit'] )){
	$var = [];
	foreach($_POST as $name=>$value)
	{
		if($name=="submit")
		{}
	else
	{
		$var[$name]=$value;
	}
	}
	$_SESSION["val"] = $var;
	$resuume = $_SESSION["resume"]["responsib"];
	array_push($resuume, $var);
	$_SESSION["resume"]["responsib"] = $resuume;
	$resumee = $_SESSION["resume"];
	$data = array("email" => $_SESSION["email"], "resume" => $_SESSION["resume"]);
	$data_string = json_encode($data);
}

if ( isset( $_POST['certifsubmit'] )){
	$var = [];
	foreach($_POST as $name=>$value)
	{
		if($name=="submit")
		{}
	else
	{
		$var[$name]=$value;
	}
	}
	$_SESSION["val"] = $var;
	$resuume = $_SESSION["resume"]["certification"];
	array_push($resuume, $var);
	$_SESSION["resume"]["certification"] = $resuume;
	$resumee = $_SESSION["resume"];
	$data = array("email" => $_SESSION["email"], "resume" => $_SESSION["resume"]);
	$data_string = json_encode($data);
}

if ( isset( $_POST['projsubmit'] )){
	$var = [];
	foreach($_POST as $name=>$value)
	{
		if($name=="submit")
		{}
	else
	{
		$var[$name]=$value;
	}
	}
	$_SESSION["val"] = $var;
	$resuume = $_SESSION["resume"]["project"];
	array_push($resuume, $var);
	$_SESSION["resume"]["project"] = $resuume;
	$resumee = $_SESSION["resume"];
	$data = array("email" => $_SESSION["email"], "resume" => $_SESSION["resume"]);
	$data_string = json_encode($data);
}

if ( isset( $_POST['skillsubmit'] )){
	$var = [];
	foreach($_POST as $name=>$value)
	{
		if($name=="submit")
		{}
	else
	{
		$var[$name]=$value;
	}
	}
	$_SESSION["val"] = $var;
	$resuume = $_SESSION["resume"]["skill"];
	array_push($resuume, $var);
	$_SESSION["resume"]["skill"] = $resuume;
	$resumee = $_SESSION["resume"];
	$data = array("email" => $_SESSION["email"], "resume" => $_SESSION["resume"]);
	$data_string = json_encode($data);
}

if ( isset( $_POST['adddetsubmit'] )){
	$var = [];
	foreach($_POST as $name=>$value)
	{
		if($name=="submit")
		{}
	else
	{
		$var[$name]=$value;
	}
	}
	$_SESSION["val"] = $var;
	$resuume = $_SESSION["resume"]["adddet"];
	array_push($resuume, $var);
	$_SESSION["resume"]["adddet"] = $resuume;
	$resumee = $_SESSION["resume"];
	$data = array("email" => $_SESSION["email"], "resume" => $_SESSION["resume"]);
	$data_string = json_encode($data);
}

$ch = curl_init('http://localhost:3000/employee/updateres');
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