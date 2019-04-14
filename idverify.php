<?php
	session_start();
	$_SESSION['idmsg']="";
	if(isset($_POST['Next'])){
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
				}
					// echo "Connected successfully";
			
			$_SESSION['idmsg']="";
			$id=$_POST['idverify'];
			$_SESSION['vid']=$id;
			$sql1 = "select vname from voter where vids='$id'";
			$result1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_assoc($result1);
			$_SESSION['username']=$row1['vname'];
			
			$sql = "select vids from voter where vids='$id'";
			$result = $conn->query($sql);
			$row = mysqli_fetch_assoc($result);
			
			if ($row["vids"]==$id){header("location:gmailverify.php");
			$_SESSION['idmsg']="";}
			else{
				// echo "<script type='text/javascript'>alert('invalid voterid');</script>";
				$_SESSION['idmsg']="***invalid id number***";
				// header("location:idverify.php");
				}
			mysqli_close($conn);
	}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
<style> 
	input[type=text] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 0px 0;
		  box-sizing: border-box;
		  border: none;
		  border-bottom: 2px solid dodgerblue;
	}
	.button {
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
</style>
</head>
<body>
<div class="id1" style="margin:100px 520px;width:350px;height:65%;padding:12px 15px;background-color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	<center><h1><i class="fa fa-yelp" style="font-size:40px;color:red;";><font color="#3369E8">B</font><font color="#D50F25">a</font><font color="#EEB211">l</font><font color="#3369E8">l</font><font color="#009925">o</font><font color="#D50F25">t</font></i></h1></center>
	<center><p style="font-size:20px;">Sign in<br>with your id</p></center>
	<form method="post" >
		<input type="text" placeholder="ID Number" name="idverify" required>
		<?php echo "<center><p style='color:red'>".$_SESSION['idmsg']."</p></center>"?>
		<br>
		<p>how to vote in on Stream Ballot???<p>
		<p><a style="text-decoration: none;
					 display: inline-block;
					 color:dodgerblue;" href="help.php">learn more</a><p>
		<br>
		<br>
		<p style="padding-left:250px;"><input  type="submit" name="Next" value="Next" class="button"></p>
	</form>
</div>
</body>
</html>
