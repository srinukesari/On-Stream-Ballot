<html>
<head>
<script>
function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
<style>
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
.button2{
		  float:left;
		  border-radius:15px;
		  background-color:transparent;
		  border: none;
		  color: black;
		  padding: 50px 28px 0px 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 25px;
		  margin: 4px 2px;
		  cursor: pointer;
}
.button1 {
		  float:left;
		  border-radius:15px;
		  background-color:transparent;
		  border: none;
		  color: black;
		  padding: 0px 90px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 35px;
		  margin: 0px 2px;
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 0.2px solid #dddddd;
  text-align: left;
  padding:20px 100px;
}
 th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 15px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
input[type="radio"] {
     transform: scale(2.25);
}
</style>
</head>
<body>
<div class="div1" style="width:100%;height:8%;background-color:dodgerblue;">
	<p style="padding-left:0px;"><a href="voterhome.php" class="button"><i class="fa fa-home" style="float:left;";>Home</i></a></p>
	<p style="padding-left:1200px;font-size:20px;"><button onclick="myFunction()" class="button"><i class="fa fa-sign-out" style="float:left; text-align:center;";>logout</i></button></a></p>
</div>
<div class="div21" style="width:100%;height:92%;background-color:transparent;position:relative;">
	<div class="div2" style="width:20%;height:100%;background-color:transparent;position:absolute;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  ">
			<p style="padding-left:50px"><a href="#" class="button2"><i class="fa fa-hand-grab-o" style="font-size:140px;";></i></a></p>
			<center><p ><a href="#" class="button1">VOTE</a></p></center>
			
			<p style="padding:65px 40px;"><a href="candid.php" class="button2"><i class="fa fa-users" style="font-size:140px;";></i></a></p>
			<center><a href="candid.php" class="button1">Nominee</a></center>+
	
	</div>
	<div class="div3" style="left:20%;height:100%;width:80%;padding:30px 320px;background-color:transparent;position:absolute;">
		<?php
					$servername = "localhost";
					$username = "root";
					$password = "39503950";
					$dbname="oballot";
					$conn = mysqli_connect($servername, $username, $password,$dbname);
					if (!$conn){
							die("Connection failed: " . mysqli_connect_error());
							}
					session_start();
					$vcheck=$_SESSION['vid'];
					
					
					$result1 = mysqli_query($conn,"SELECT * FROM votes");
					
					$result = mysqli_query($conn,"SELECT main FROM voter where vids=$vcheck");
					$row = mysqli_fetch_array($result);
					$imp=$row['main'];
					
					if($imp==0){
					echo "<style>.button3{
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
								}</style>";

					echo "<table border='0' width='100%'>
					<tr>
					<th>Party_Name</th>
					<th>Vote</th>
					</tr>
					<form method='post' action='votingsql.php'>";
					

					while($row1 = mysqli_fetch_array($result1))
					{
						echo "<tr>";
						echo "<td>" . $row1['party'] . "   </td>";
						$r=$row1['radio'];
						echo "<td><input type='radio' name='partyradio' value='$r' ><br></td>";
						echo "</tr>";
					}
					echo "<p style='padding-left:185px;' ><input type='submit' value='submit' class='button3'></p>";
					echo "</form></table>";
					}
					else{
						echo "<center><p style='padding-top:140px;'><h1> your vote is Successfully Registered</h1></p>";
						echo "<p style='padding:10px;'><h2> thank you!!!</h2></p></center>";
					}
					mysqli_close($conn);
			?>
	</div>
</div>
</body>
</html>
<script>
function myFunction() {
location.replace("front.php");
}
</script>
