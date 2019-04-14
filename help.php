
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
<style>
input[type=text] {
		  width: 86%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: none;
		  border-bottom: 1px solid dodgerblue;
		  border-radius:8px;
	}
.button {
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

<div class="div2" style="height:50%;width:48%;padding:15px 350px;background-color:Azure ;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	<center><h1 style="font-family:verdana;"><i class="fa fa-yelp" style="font-size:75px;color:red;";><font color="blue">B</font><font color="red">a</font><font color="yellow">l</font><font color="blue">l</font><font color="green">o</font><font color="red">t</font></i></h1></center>
    <center><h3 style="font-size:45px;">Help Desk</h3></center><br><br>
	<form method="post" action="helpsql.php">
		<input type="text" name="ques" placeholder="ask your question...">
		<input type="submit" name="submit" value="ASk" class="button" >
	</form>
</div>
<br>
<div class="div2" style="height:40%;width:95%;padding:5px 35px;background-color:transparent ;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);overflow:auto;">
		<?php
					$servername = "localhost";
					$username = "root";
					$password = "39503950";
					$dbname="oballot";
					$conn = mysqli_connect($servername, $username, $password,$dbname);
					if (!$conn){
							die("Connection failed: " . mysqli_connect_error());
							}

					$result1 = mysqli_query($conn,"SELECT * FROM helpdesk");
					while($row1 = mysqli_fetch_array($result1))
					{
						echo "<p style='font-size:25px;color:red'>Ques:         ".$row1['ques']."?";
						echo "<br></p>";
						echo "<p style='font-size:25px;color:dodgerblue;'>Ans:      ";
						if($row1['ans']!='0'){
							echo $row1['ans'];
						}
						else{ echo "not yet answered";}
						echo "<br></p>";
					}
					mysqli_close($conn);
			?>	
</div>	
</body>
</html>
