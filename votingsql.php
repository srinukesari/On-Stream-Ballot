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
			$pradio=$_POST['partyradio'];
			echo $pradio;
			$vcheck=$_SESSION['vid'];
			
			$sql = "update  votes set votes=votes+1 where radio=$pradio";
			
			$sql1 = "update  voter set main=1 where vids=$vcheck";
			
			if(mysqli_query($conn, $sql)===true){
				if(mysqli_query($conn, $sql1)===true){
					header("location:voterhome.php");}
			}
			
			//if ($row["vids"]==$id){header("location:gmailverify.php");}
			//else{echo "<script type='text/javascript'>alert('invalid voterid');</script>";
				//header("location:idverify.php");}
			//if (mysqli_num_rows($result) > 0){
				//echo '!!!...Today events are...!!!';
				//while($row = mysqli_fetch_assoc($result)) {echo "<br>\t"."\t". $row["event"]."  ";}}
			//else {echo "NO events Today";}
			//echo $id;
			//echo "<script type='text/javascript'>alert('$msg');</script>";
			//header("location:gmailverify.php");
			mysqli_close($conn);
?>