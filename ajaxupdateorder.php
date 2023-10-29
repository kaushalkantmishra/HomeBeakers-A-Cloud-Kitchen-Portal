<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_GET['orderid']))
{
	$sqlfoodorder ="UPDATE foodorder SET qty='$_GET[quantity]' where orderid = '$_GET[orderid]'";
	$qsqlfoodorder= mysqli_query($con,$sqlfoodorder);
}
if(isset($_GET['ordernoteid']))
{
	$sqlfoodorder ="UPDATE foodorder SET description='$_GET[note]' where orderid = '$_GET[ordernoteid]'";
	$qsqlfoodorder= mysqli_query($con,$sqlfoodorder);
}
?>