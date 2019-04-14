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
			
			$partyid=$_POST["profile"];
			
			$sql="select * from voter where vids= $partyid"	;
			
			$sql2="select * from voterdetails where vid= $partyid"	;
			
			$sql1="select * from npics where partyid= $partyid"	;
			
			$result = mysqli_query($conn, $sql);
			$row3 = mysqli_fetch_assoc($result);
			
			
			$result1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_assoc($result1);
			
			
			$result2 = mysqli_query($conn, $sql2);
			$row2 = mysqli_fetch_assoc($result2);
			
			
			

?>
<html>
<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="voterfr.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
</head>
<body>
<div class="profile" style="margin:0;padding-left:30px; padding-top:3px;padding-bottom:30px;
	background-color:white;text-color:white;height:10%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
	<center><h1><i class="fa fa-yelp" style="font-size:30px;color:red;";><font color="#3369E8">B</font><font color="#D50F25">a</font><font color="#EEB211">l</font><font color="#3369E8">l</font><font color="#009925">o</font><font color="#D50F25">t</font></i></h1></center>
</div>
<div class="profile2" style="margin:20px;padding:10px;">
	<div class="pro2.1" style="margin:3px;padding:0px;background-color:transparent;height:30%;position:relative;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
		<div class="pro2.1.1" style="background-color:transparent;height:100%;padding-left:17px;padding-top:27px; width:17%;position:absolute;border-radius:100px" >
			<?php  
                $query = "SELECT * FROM images where partyid=$partyid";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo ' <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="150" width="150" class="img-thumnail" style="border-radius:200px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);object-fit: contain;"/>';  
                }  
                ?>
		</div>
		<div class="pro2.1.2" style="background-color:transparent;height:90%; width:65%;left:18%;position:absolute;background-img:logo.jpg">
			<h1 style="font-size:70px;padding-top:7px;font-family: 'Open Sans Condensed', sans-serif;"><?php echo $row1['party'];?></h1>
		</div>
		<div class="pro2.1.2" style="background-color:transparent;height:100%;padding-top:25px;padding-left:20px; width:15%;left:85%;position:absolute;background-img:logo.jpg">
			<?php  
                $query = "SELECT * FROM partyimages where partyid=$partyid";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo ' <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="150" width="150" class="img-thumnail" style="border-radius:200px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);object-fit: contain;"/>';  
                }  
                ?>
		</div>
	</div>
	<hr>
	<div class="pro4" style="margin:3px;padding:0px;background-color:transparent;height:45%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
				<h2>ABOUT THE NOMINEE</h2>
				<center><h2>Candidate Name   :  <?php echo $row3['vname']; ?> </h2>
				<br>
				<h4>Nominee Id   :   <?php echo $row1['partyid'];?></h4>
				<br>
				<h4>Nominee DOB   :<?php echo $row2['vdob'];?></h4>
				<br>
				<h4>Nominee desc   :  <?php echo $row1['partydesc'];?></h4></center>
	</div>
</div>
</body>
</html>