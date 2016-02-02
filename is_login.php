<?php
include_once("config.php");
if(!isset($_SESSION["email"])){
	header("location: login.php");
}
?>