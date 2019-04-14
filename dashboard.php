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
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script> 
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
input[type=text] {
		  width: 86%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: none;
		  border-bottom: 1px solid dodgerblue;
		  border-radius:8px;
	}
.button1{
		  float:right;
		  border-radius:15px;
		  background-color:dodgerblue;
		  border: none;
		  color: white;
		  padding: 8px 18px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 15px;
		  margin: 20px 10px;
		  cursor: pointer;
}
</style>
</head>
<body>
<div class="div1" style="width:100%;height:8%;background-color:Dodgerblue;">
	<p style="padding-left:40px;"><a href="dashboard.php" class="button"><i class="fa fa-user-circle   " style="float:left;";>Admin</i></a></p>
	<p style="padding-left:1200px;font-size:20px;"><a href="front.php"  class="button"><i class="fa fa-sign-out" style="float:left; text-align:center;";>logout</i></a></p>
</div>
<div class="div21" style="width:100%;height:92%;background-color:transparent;position:relative;">
	<div class="div2" style="width:17%;height:100%;background-color:Azure;position:absolute; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<p style="padding-top:10px;"><a href="addvoter.php" class="button"><i class="fa fa-user-plus" style="float:left;";> Add voter</i></a></p>
		<p style="padding-top:10px;"><a href="delete voter.php" class="button"><i class="fa fa-scissors" style="float:left;";> remove voter</i></a></p>
		<p style="padding-top:10px;"><a href="voter table.php" class="button"><i class="fa fa-group" style="float:left;";> voter list</i></a></p>
		<p style="padding-top:10px;"><a href="nremove.php" class="button"><i class="fa fa-times-circle" style="float:left;";>Nominee </i></a></p>
		<p style="padding-top:10px;"><a href="nlist.php" class="button"><i class="fa fa-address-book" style="float:left;";>Nominee list</i></a></p>
		<p style="padding-top:10px;"><a href="table.php" class="button"><i class="fa fa-bar-chart" style="float:left;";> status</i></a></p>
	</div>
	<div class="div3" style="left:17%;height:98%;width:83%;padding:30px 320px;background-color:transparent;position:absolute;">
		<center><h1 style="font-family:verdana;"><i class="fa fa-yelp" style="font-size:75px;color:red";><font color="blue">B</font><font color="red">a</font><font color="yellow">l</font><font color="blue">l</font><font color="green">o</font><font color="red">t</font></i></h1></center>
		<center><h3 style="font-size:45px;">Help Desk</h3></center><br><br>
		<form method="post" action="helpans.php">
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			session_start();
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
			}
				$sql = "select * from helpdesk where ans='0'";
				$result=mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result);
				if($row['ques']==''){
					echo "<p style='font-size:20px;padding-left:20px'>No question from clients!!!</p>";
				}
				else{
					echo "<p style='font-size:20px;padding-left:20px;color:red;'>".$row['ques']."?</p>";
				}
			$_SESSION['ans']=$row['ques'];	
			?>
			<input type="text" name="ans" placeholder="answer the ques from the client">
			<input type="submit" name="submit" value="submit" class="button1" >
	</form>
	</div>
</div>
</body>
</html>
<script>
function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>