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
			$vname=$_POST['vname'];
			$vid=$_POST['vid'];
			$vdob=$_POST['vdob'];
			$vemail=$_POST['vemail'];
			
			$sql1 = "insert into voter (vids,vname) values('$vid','$vname')";
			
			$sql = "insert into voterdetails values('$vid','$vdob','$vemail')";
			
			if(mysqli_query($conn, $sql)===true){
				if(mysqli_query($conn, $sql1)===true){
				echo "<script type='text/javascript'>alert('Added voter successfully');</script>";
					header("refresh:0;url=addvoter.php");
				}
			}
?>