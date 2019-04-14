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
			$nid=$_POST['nid'];
			$nparty=$_POST['nparty'];
			$nemail=$_POST['nemail'];
			$npass=$_POST['npass'];
			
			$sqlmain="select vid from voterdetails where vemail='$nemail'";
			$result=mysqli_query($conn, $sqlmain);
			
			$row = mysqli_fetch_assoc($result);
			
			$sql2 = "insert into votes (party,partyid) values('$nparty','$nid')";
			
			if (strlen($nid) != 12) {
				echo "<script type='text/javascript'>confirm(' please enter a valid candidate id!')</script>";
				header("refresh:0;url=nominls2.php");
			}
			elseif (strlen($npass) <= 8 ) {
				$m='Your Password Must Contain At Least 8 Characters'.' \n'.' rules'.'\n'.'1.atleast 8 characters'.'\n'.'2.atleast one numerical'.'\n'.'3.atleast one capital letter'.'\n'.'4.atleast one lowercase letter '.'\n';
				echo "<script type='text/javascript'>confirm('$m')</script>";
				header("refresh:0;url=nominls2.php");
			}
			elseif(!preg_match("#[0-9]+#",$npass)) {
				$m='Your Password Must Contain At Least 1 Number'.' \n'.' rules'.'\n'.'1.atleast 8 characters'.'\n'.'2.atleast one numerical'.'\n'.'3.atleast one capital letter'.'\n'.'4.atleast one lowercase letter '.'\n';
				echo "<script type='text/javascript'>confirm('$m ')</script>";
				header("refresh:0;url=nominls2.php");
			}
			elseif(!preg_match("#[A-Z]+#",$npass)) {
				$m='Your Password Must Contain At Least 1 Capital Letter!'.' \n'.' rules'.'\n'.'1.atleast 8 characters'.'\n'.'2.atleast one numerical'.'\n'.'3.atleast one capital letter'.'\n'.'4.atleast one lowercase letter '.'\n';
				echo "<script type='text/javascript'>confirm('$m ')</script>";
				header("refresh:0;url=nominls2.php");
			}
			elseif(!preg_match("#[a-z]+#",$npass)) {
				$m='Your Password Must Contain At Least 1 Lowercase Letter!'.' \n'.' rules'.'\n'.'1.atleast 8 characters'.'\n'.'2.atleast one numerical'.'\n'.'3.atleast one capital letter'.'\n'.'4.atleast one lowercase letter '.'\n';
				echo "<script type='text/javascript'>confirm('$m')</script>";
				header("refresh:0;url=nominls2.php");
			}
			else{
				if($row['vid']==$nid){
					$sql1 = "insert into nominee values('$nid','$nparty','$nemail','$npass')";
					$sql5 = "insert into npics (partyid,party) values('$nid','$nparty')";
					if(mysqli_query($conn, $sql1)===true){
						if(mysqli_query($conn, $sql2)===true){
							if(mysqli_query($conn, $sql5)===true){
								echo "<script type='text/javascript'>alert('sucessfully registered');</script>";
								header( "refresh:0;url=nominls.php" );}
							else{
								echo "<script type='text/javascript'>alert('already registered candidate id');</script>";
								header( "refresh:0;url=nominls.php" );
							}
						}
						else{
							echo "<script type='text/javascript'>alert('already registered party');</script>";
							header( "refresh:0;url=nominls.php" );
						}
					}
					else{
						echo "<script type='text/javascript'>alert('already registered email or candidate');</script>";
						header( "refresh:0;url=nominls.php" );
					}
				}
				else{
					echo "<script type='text/javascript'>alert('invalid email or candidate id ');</script>";
					header( "refresh:0;url=nominls.php" );
					
				}
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