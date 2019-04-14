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
			
			$sql="select * from voter where vids= $partyid"	;
			
			$sql21="select * from voterdetails where vid= $partyid"	;
			
			$sql12="select * from npics where partyid= $partyid"	;
			
			$result = mysqli_query($conn, $sql);
			$row3 = mysqli_fetch_assoc($result);
			
			
			$result12 = mysqli_query($conn, $sql12);
			$row12 = mysqli_fetch_assoc($result12);
			
			
			$result21 = mysqli_query($conn, $sql21);
			$row21 = mysqli_fetch_assoc($result21);
			
			$connect = mysqli_connect($servername, $username, $password,$dbname);
			if(isset($_POST["insert"]))  
			 {  
				  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
				  $query = "INSERT INTO images(name,partyid) VALUES ('$file',$partyid)";
				  $query1 = "update images set name='$file' where partyid=$partyid";
				  
				  
				  $query2 = "select * from images where partyid=$partyid";
				  $result9 = mysqli_query($conn, $query2);
				  $row9 = mysqli_fetch_assoc($result9);
				  
				  if($row9['partyid']==''){
					  if(mysqli_query($connect, $query))  
					  {
						   echo '<script>alert("Image Inserted into Database")</script>';  
					  } 
				  }
				  else{
					  if(mysqli_query($connect, $query1))  
					  {  
						   echo '<script>alert("Image updated into Database")</script>';  
					  } 
				  }
			 }  
			 
			 if(isset($_POST["party"]))  
			 {  
				  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
				  $query90 = "INSERT INTO partyimages(name,partyid) VALUES ('$file',$partyid)";
				  $query91 = "update partyimages set name='$file' where partyid=$partyid";
				  
				  
				  $query92 = "select * from partyimages where partyid=$partyid";
				  $result92 = mysqli_query($conn, $query92);
				  $row92 = mysqli_fetch_assoc($result92);
				  
				  if($row92['partyid']==''){
					  if(mysqli_query($connect, $query90))  
					  {  
						   echo '<script>alert("Image Inserted into Database")</script>';  
					  } 
				  }
				  else{
					  if(mysqli_query($connect, $query91))  
					  {  
						   echo '<script>alert("Image updated into Database")</script>';  
					  } 
				  }
			 }  
			
			

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
<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>
<style>
	input[type=file]{ 
		  
		  padding: 0px;
		  margin:0;
		  box-sizing: border-box;
		  border-bottom: 1px solid dodgerblue;
		  border-radius:25px;
	}
	.button {
		  float:left;
		  border-radius:15px;
		  background-color:transparent;
		  border: none;
		  color: black;
		  padding:0px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 25px;
		  margin: 0px;
		  cursor: pointer;
}
	
</style>
</head>
<body>
<div class="profile" style="margin:0;padding-left:0px; padding-top:3px;padding-bottom:30px;
	background-color:white;text-color:white;height:10%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
	<i class="fa fa-yelp" style="padding-left:610px;color:red;padding-top:17px;font-size:30px;float:left;";><font color="#3369E8">B</font><font color="#D50F25">a</font><font color="#EEB211">l</font><font color="#3369E8">l</font><font color="#009925">o</font><font color="#D50F25">t</font></i>
	<p style="padding-left:1200px;padding-top:20px;font-size:20px;"><button onclick="myFunction()" class="button"><i class="fa fa-sign-out" style="float:left; text-align:center;";>logout</i></button></a></p>
</div>
<div class="profile2" style="margin:20px;padding:10px;">
	<div class="pro2.1" style="margin:3px;padding:0px;background-color:transparent;height:30%;position:relative;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
		<div class="pro2.1.1" style="background-color:transparent;height:100%; width:17%;padding-top:27px;padding-left:15px;position:absolute;border-radius:100px;object-fit: cover; " >
			<?php  
                $query = "SELECT * FROM images where partyid=$partyid";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo ' <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="150" width="150" class="img-thumnail"   style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:200px;object-fit:contain;" />';  
                }  
                ?>
		</div>
		<div class="pro2.1.2" style="background-color:transparent;height:80%; width:45%;left:18%;position:absolute;background-img:logo.jpg">
			<h1 style="font-size:70px;padding-top:7px;font-family: 'Open Sans Condensed', sans-serif;"><?php echo $row12['party']; ?></h1>
		</div>
		<div class="pro2.1.3" style="background-color:transparent;height:20%; width:65%;left:18%;position:absolute;padding-top:150px;background-img:logo.jpg">
				<form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
		</div>
		<div class="pro2.1.2" style="background-color:transparent;height:100%;padding-top:150px; width:15%;left:68%;position:absolute;background-img:logo.jpg">
			<form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />   
                     <input type="submit" name="party" id="party" value="party" class="btn btn-info" /> 
                </form> 
		</div>
		<div class="pro2.1.2" style="background-color:transparent;height:100%; width:15%;left:87%;position:absolute;padding-top:27px;background-img:logo.jpg">
				<?php  
                $query1 = "SELECT * FROM partyimages where partyid=$partyid";  
                $result1 = mysqli_query($connect, $query1);  
                while($row1 = mysqli_fetch_array($result1))  
                {  
                     echo ' <img src="data:image/jpeg;base64,'.base64_encode($row1['name'] ).'" height="150" width="150" class="img-thumnail"   style="border-radius:200px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);object-fit: contain;"/>';  
                }  
                ?>
		</div>
	</div>
	<hr>
	<div class="pro4" style="margin:3px;padding:0px;background-color:transparent;height:45%;overflow:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
				<h2>ABOUT THE NOMINEE</h2>
				<center><h2>Candidate Name   :   <?php echo $row3['vname'];?></h2>
				<br>
				<h4>Nominee Id   :   <?php echo $row12['partyid'];?></h4>
				<br>
				<h4>Nominee DOB   :<?php echo $row21['vdob'];?></h4>
				</center>
				<br>
				<h4>Nominee desc   : <?php echo $row12['partydesc'];?></h4>
				<form method="post" action="b.php" enctype="multipart/form-data">  
                    <textarea cols="175" rows="12" name="manifesto" id="para1">
					<?php echo $row1['partydesc'];?>
					</textarea>
					<input type="submit" name="save"  value="save" class="btn btn-info" /> 
                </form>	
				
	</div>
</div>
</body>
</html>
<script> 
 $(document).ready(function(){  
      $('#party').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 

 </script>  
 <script>
function myFunction() {
location.replace("front.php");
}
</script>