<?php
session_start();

if (isset($_POST["bookid"]) && isset($_POST["issue"])) {
	$_SESSION["bookid"] = $_POST["bookid"];
}
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<head>
	<title>Issued Books to Students</title>
	<link rel="stylesheet" type="text/css" href="../css/book_search.css">
	<link rel="stylesheet" type="text/css" href="../css/back_button.css">
	<link rel="stylesheet" type="text/css" href="../css/button.css">
	<style>
		.issuebtn {
			background-color: red;
			color: white;
			height: 40px;
			border: none;
			cursor: pointer;
			width: 100px;
			border-radius: 4px;
		}
	</style>
</head>
<body>
	<center>
		<img src="../img/ICON.png">
	</center>
	<br />
	<div class="box">
		<marquee direction="lefts">Welcome To Issued Books Section!!!!</marquee>
	</div>
	</center>
	<br />
	<center>
		<input type="submit" class="btn" value="Back" onclick="goBack()">
	</center>
	<script src="../js/back.js"></script>
	<br />
	<center>
		<?php
		if (isset($_SESSION["msg"])) {
			echo $_SESSION["msg"];
			unset($_SESSION["msg"]);
		}
		?>
		<table id="myTable" border="1">
	</center>
	<tr class="header">
		<th style="width:20%;">Student Name</th>
		<th style="width:20%;">Year</th>
		<th style="width:20%;">Batch</th>
		<th style="width:20%;">Contact</th>
		<th style="width:20%;">Book_Name</th>
		<th style="width:20%;">Issue_Date</th>
		<th style="width:10%;">Return_Date</th>																		
	</tr>
	<?php
	include "index2.php";
	// Display all books which are issued by student.
	$sql = "SELECT students.First_Name,students.Last_Name,students.Contact_No,students.Year,students.Batch,stud_book.Book_Name,stud_book.Issue_Date,stud_book.Return_Date FROM students INNER JOIN stud_book ON students.Roll_No = stud_book.Roll_No";
	$result = $mysqli->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['First_Name']." ".$row['Last_Name']. "</td>";
		echo "<td>" . $row['Year'] . "</td>";
		echo "<td>" . $row['Batch'] . "</td>";
		echo "<td>" . $row['Contact_No'] . "</td>";
		echo "<td>" . $row['Book_Name'] . "</td>";
		echo "<td>" . $row['Issue_Date'] . "</td>";
		echo "<td>" . $row['Return_Date'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>