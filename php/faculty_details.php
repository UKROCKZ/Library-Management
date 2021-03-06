<?php

session_start();

if (isset($_GET["SDRN_No"]) && isset($_GET["Password"])) {
	$_SESSION["sdrnNo"] = $_GET["SDRN_No"];
	$_SESSION["password"] = $_GET["Password"];
}

?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
	<title>Faculty Section</title>
	<link rel="stylesheet" type="text/css" href="../css/all_faculty.css">
	<link rel="stylesheet" type="text/css" href="../css/student_info.css">
	<link rel="stylesheet" type="text/css" href="../css/add_book.css">
	<style>
		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			background-color: black;
			color: white;

		}
	</style>
</head>
<body>
	<center>
		<img src="../img/ICON.png">
	</center>
	<div class="topnav" id="myTopnav">
		<a href="" class="active">All Details</a>
		<a href="search_books_fac.php">Request Book</a>
		<a href="fac_issue.php">Issued Books</a>
		<a href="req_book.php">Requisition</a>
		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>
	<br />
			<input style="margin-left: 47%" type="submit" class="btn" value="Log Out" onClick="location.href='homepage.php'">

	<script src="../js/back.js">
	</script>

	<script src="../js/HOMEPAGE_1.js">
	</script>

	<br />
	<center>
		<h2>Faculty Information</h2>
		<br />
		<table id="myTable" border="1">
	</center>
	<tr class="header">
		<th style="width:20%;">SDRN_No</th>
		<th style="width:20%;">First_Name</th>
		<th style="width:20%;">Middle_Name</th>
		<th style="width:20%;">Last_Name</th>
		<th style="width:20%;">Email_ID</th>
		<th style="width:20%;">Contact_No</th>
	</tr>
	<?php
	include "index2.php";
	include "fac_details.php";
	?>
	<br />
	<hr />
	<center>
		<h2>Issued Books Information</h2><br>
		<table id="myTable" border="1">
	</center>
	<tr class="header">
		<th style="width:20%;">SDRN_No</th>
		<th style="width:20%;">Book_ID</th>
		<th style="width:20%;">Book_Name</th>
		<th style="width:20%;">Issue_Date</th>
		<th style="width:20%;">Return_Date</th>
	</tr>

	<?php
	include "index2.php";
	include "faculty_info.php";
	?>

	<div class="footer">
		<h6><b style="margin-left: 15%">Developed By:</b> Varsha Kedare, Reema Kharat, Mayuri Kumbhar, Riya Thapliyal, Diksha Nigam, Amankumar Singh, Ritika Vanave, Utkarsh Kharache
			<br />
			<b style="margin-left: 10%"> Under the Guidance of:</b> Mrs.Apurva Shinde</h6>
	</div>
	<body>
<html>