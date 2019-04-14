<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
				}
			else{echo "Connected successfully";}
			session_start();
			$vid=$_POST['vid'];
			
			
			$sql = "delete from voter where vids=$vid";
			
			$sql1 = "delete from voterdetails where vid=$vid";
			
			$sql2 = "delete from nominee where candidate_id=$vid";
			
			$sql3 = "delete from votes where partyid=$vid";
			
			if(mysqli_query($conn, $sql)===true){
				if(mysqli_query($conn, $sql1)===true){
					if(mysqli_query($conn, $sql2)===true){
						if(mysqli_query($conn, $sql3)===true){
								echo "<script type='text/javascript'>alert('removed successfully!!!');</script>";
								header("refresh:0;url=delete voter.php");}
					}
				}
			}
			
			
			mysqli_close($conn);
?>