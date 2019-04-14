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
			$cid=$_POST['cid'];
			$pass=$_POST['pass'];
			$_SESSION["partyid"]=$cid;
			
			$sql="select password from nominee where candidate_id=$cid";
			$result=mysqli_query($conn, $sql);
			
			$row = mysqli_fetch_assoc($result);
			
			if($row['password']==$pass){ 	
			header( "location:profile.php");}
			else{
				echo "<script type='text/javascript'>alert('invalid username or password');</script>";
				header( "refresh:0;url=nominls.php");}
			
			
			
			mysqli_close($conn);
?>