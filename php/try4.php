<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
	<title>Faculty Section</title>
	<link rel="stylesheet" type="text/css" href="../css/book_search.css">
	<link rel="stylesheet" type="text/css" href="../css/button.css">
</head>
<body>
	<center>
		<img src="../img/ICON.png">
	</center><br />
	<div class="box">
		<marquee direction="lefts">Welcome To Faculty Section!!!!</marquee>
	</div>
	</center>
	<br />
<center>
	<form action="try4.php">
	<input type="text" name="keyword" id="myInput" onkeyup="myFunction()" placeholder="Search Faculty SDRN_No here" title="Type in a name" style="border-color:black;"required></center>
<center>
	<input type="submit" class="btn" value="Search">
</form>
	<button class="btn" onclick="openForm()" id="update">Update</button>
	<button class="btn" onclick="openForm1()">Delete</button>
</center>
<br />
<center>
<table id="myTable" border="1"></center>
  <tr class="header">
    <th style="width:10%;">SDRN_No</th>
    <th style="width:20%;">Book_ID</th>
	<th style="width:20%;">Book_Name</th>
	<th style="width:20%;">Issue_Date</th>
	<th style="width:10%;">Return_Date</th>
  </tr>

  <?php
	include "index2.php";
	include "search_faculty.php";
?>
<br />
<center>
	<input type="submit" class="btn" value="Back" onclick="goBack()">
</center>
<script src="../js/back.js"></script>
</center>
<div class="form-popup" id="myForm">
  <form action="update_faculty.php" class="form-container">
	<label for="SDRN_No"><b>SDRN No.</b></label>
    <input type="text" placeholder="Enter Roll No." name="SDRN_No" required> 

	<label for="Book_ID"><b>Book ID</label>
    <input type="text" placeholder="Enter Book ID" name="Book_ID" required>

	<label for="Book_Name"><b>Book Name</label>
    <input type="text" placeholder="Enter Book Name" name="Book_Name" required>

	<label for="Issue_Date"><b>Issue Date</b></label>
    <input type="text" placeholder="Enter Issue Date" name="Issue_Date" value="<?php $d=strtotime("today"); echo date("Y-m-d ", $d);  ?>">

	<label for="Return_Date"><b>Return Date</b></label>
    <input type="text" placeholder="Enter Return Date" name="Return_Date" value="<?php

		$returnDate = 15;

		$return_month = date("m",strtotime("U"));
		$freturn_year = date("Y",strtotime("U"));

		if($return_month >= 01 && $return_month <=05){
			$freturn_month = 05;
			$returnDate = $freturn_year."-".$freturn_month."-".$returnDate;
		}
		else{
			$freturn_month = 12;
			$returnDate = $freturn_year."-".$freturn_month."-".$returnDate;
		}
		echo $returnDate;
  ?>">

    <button type="submit" class="btn" >Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script src="../js/update.js"></script>

<div class="form-popup" id="myForm1">
  <form action="delete_faculty.php" class="form-container">

	<label for="SDRN_No"><b>SDRN No.</b></label>
    <input type="text" placeholder="Enter SDRN No." name="SDRN_No" required>

	<label for="Book_ID"><b>Book ID</label>
    <input type="text" placeholder="Enter Book ID" name="Book_ID" required>

    <button type="submit" class="btn" >Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
  </form>
</div>

<script src="../js/delete.js"></script>
</body>
</html>