<?php
			$servername = "localhost";
			$username = "root";
			$password = "39503950";
			$dbname="oballot";
			$conn = mysqli_connect($servername, $username, $password,$dbname);
			if (!$conn){
				die("Connection failed: " . mysqli_connect_error());
				}
					// echo "Connected successfully";
			session_start();
			$id=$_POST['idverify'];
			$_SESSION['vid']=$id;
			$sql1 = "select vname from voter where vids=$id";
			$result1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_assoc($result1);
			$_SESSION['username']=$row1['vname'];
			
			$sql = "select vids from voter where vids=$id";
			$result = $conn->query($sql);
			$row = mysqli_fetch_assoc($result);
			
			if ($row["vids"]==$id){header("location:gmailverify.php");
			$_SESSION['idmsg']="";}
			else{echo "<script type='text/javascript'>alert('invalid voterid');</script>";
				$_SESSION['idmsg']="***invalid id number***";
				header("location:idverify.php");}
			//if (mysqli_num_rows($result) > 0){
				//echo '!!!...Today events are...!!!';
				//while($row = mysqli_fetch_assoc($result)) {echo "<br>\t"."\t". $row["event"]."  ";}}
			//else {echo "NO events Today";}
			//echo $id;
			//echo "<script type='text/javascript'>alert('$msg');</script>";
			//header("location:gmailverify.php");
			mysqli_close($conn);
?>