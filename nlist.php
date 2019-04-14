<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  
  
<style>
input[type=text] ,input[type=date],input[type=email]{
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: none;
		  border-bottom: 1px solid dodgerblue;
		  border-radius:8px;
	}
.button {
		  float:left;
		  border-radius:15px;
		  background-color:transparent;
		  border: none;
		  color: black;
		  padding: 10px 28px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 25px;
		  margin: 4px 2px;
		  cursor: pointer;
}
.b{
	float:left;
	border: none;
	color:dodgerblue;
	font-size: 16px;
	text-decoration: none;
	padding:10px 0px;
}
.b:hover {
  color:red;
}
input[type=submit]{
		border-radius:200px;
		background-color:transparent;
		border: none;
		color: red;
		padding: 10px 0px;
		text-align: center;
		font-size: 16px;
		margin: 4px 0px;
		cursor: pointer;
	}
.button1{
		  border-radius:15px;
		  background-color:dodgerblue;
		  border: none;
		  color: white;
		  padding: 10px 28px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
	}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 0px 20px;
}
 th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<div class="div1" style="width:100%;height:8%;background-color:Dodgerblue;">
	<p style="padding-left:40px;"><a href="dashboard.php" class="button"><i class="fa fa-user-circle" style="float:left;";>Admin</i></a></p>
	<p style="padding-left:1200px;font-size:20px;"><a href="front.php"  class="button"><i class="fa fa-sign-out" style="float:left; text-align:center;";>logout</i></a></p>
</div>

<div class="div21" style="width:100%;height:92%;background-color:transparent;position:relative;">
	<div class="div2" style="width:17%;height:100%;background-color:Azure;position:absolute; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
		<p style="padding-top:10px;"><a href="addvoter.php" class="button"><i class="fa fa-user-plus" style="float:left;";> Add voter</i></a></p>
		<p style="padding-top:10px;"><a href="delete voter.php" class="button"><i class="fa fa-scissors" style="float:left;";> remove voter</i></a></p>
		<p style="padding-top:10px;"><a href="voter table.php" class="button"><i class="fa fa-group" style="float:left;";> voter list</i></a></p>
		<p style="padding-top:10px;"><a href="nremove.php" class="button"><i class="fa fa-times-circle" style="float:left;";>Nominee </i></a></p>
		<p style="padding-top:10px;"><a href="nlist.php" class="button"><i class="fa fa-address-book" style="float:left;";>Nominee list</i></a></p>
		<p style="padding-top:10px;"><a href="table.php" class="button"><i class="fa fa-Bar-chart" style="float:left;";> status</i></a></p>
	</div>
	<div class="div3" style="left:17%;height:98%;width:83%;padding:30px 320px;background-color:transparent;position:absolute;object-fit:auto;">
		<center><h1><i class="fa fa-yelp" style="font-size:40px;color:red;";><font color="#3369E8">B</font><font color="#D50F25">a</font><font color="#EEB211">l</font><font color="#3369E8">l</font><font color="#009925">o</font><font color="#D50F25">t</font></i></h1></center>
				<center><p style="font-size:20px;">Nominee List<br><br></p></center>
				 
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "39503950";
					$dbname="oballot";
					$conn = mysqli_connect($servername, $username, $password,$dbname);
					if (!$conn){
							die("Connection failed: " . mysqli_connect_error());
							}

					$result1 = mysqli_query($conn,"SELECT * FROM nominee");
					
					
					echo "<table border='0' width='100%'>
					<tr>
					<th>Nominee profile</th>
					<th>Name</th>
					<th>Party Name</th>
					</tr>";
					echo "<form method='post' action='profilemanifesto.php'";

					while($row1 = mysqli_fetch_array($result1))
					{
						$trip=$row1['candidate_id'];
						$result2 = mysqli_query($conn,"SELECT * FROM voter where vids=$trip");
						$row2 = mysqli_fetch_array($result2);
						echo "<tr>";
						echo "<td><i class='fa fa-user';><input type='submit' name='profile' value =".$row2['vids']." </td>";
						echo "<td>" . $row2['vname'] . "  </td>";
						echo "<td>" . $row1['party'] . "  </td>";
						
						echo "</tr>";
					}
					echo "</form>";
					echo "</table>";
					mysqli_close($conn);
			?>	
	
	</div>
</div>
</body>
</html>
