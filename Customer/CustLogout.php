<?php
session_start();

if(session_destroy())
	echo "<script>alert('Logout Succesfully!');window.location.replace('./CustLogin.php');</script>";
?>