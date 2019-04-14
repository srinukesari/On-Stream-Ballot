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
			$partyid=$_SESSION["partyid"];
			$desc=$_POST['manifesto'];
			echo $desc;
			echo $partyid;
			$sql3="select * from npics where partyid=$partyid";
			$result3 = mysqli_query($conn, $sql3);
			$row3 = mysqli_fetch_assoc($result3);
			
			if($row3['partyid']==''){
				echo "mcl";
				$sql143="insert into npics (partydesc) values ('$desc') where partid=$partyid";
				if(mysqli_query($conn, $sql143)===true)  
				{
				header("location:profile.php");  
				}
			}
			else{
				$sql143="update npics set partydesc='$desc' where partyid=$partyid";
				 if(mysqli_query($conn, $sql143)===true)  
				{
					header("location:profile.php");  
				}
			}
?>			