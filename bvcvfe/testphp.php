<?php
if ( isset( $_POST['submit'] )){
$email = $_POST['email'];
$password = $_POST['password'];
}
$_SESSION["password"] = $password;
$_SESSION["email"] = $email;

?>