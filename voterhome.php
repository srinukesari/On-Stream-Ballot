<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 
<style>
.button {
		  float:left;
		  border-radius:15px;
		  background-color:transparent;
		  border: none;
		  color: black;
		  padding: 10px 28px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 25px;
		  margin: 4px 2px;
		  cursor: pointer;
}
.button2{
		  float:left;
		  border-radius:15px;
		  background-color:transparent;
		  border: none;
		  color: black;
		  padding: 50px 28px 0px 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 25px;
		  margin: 4px 2px;
		  cursor: pointer;
}
.button1 {
		  float:left;
		  border-radius:15px;
		  background-color:transparent;
		  border: none;
		  color: black;
		  padding: 0px 90px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 35px;
		  margin: 0px 2px;
		  cursor: pointer;
}
.b{
	float:left;
	border: none;
	color:dodgerblue;
	font-size: 16px;
	text-decoration: none;
	padding:10px 0px;
}
.b:hover {
  color:red;
}
</style>
<style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>

</head>
<body>
<div class="div1" style="width:100%;height:8%;background-color:dodgerblue;">
	<p style="padding-left:0px;"><a href="voterhome.php" class="button"><i class="fa fa-home" style="float:left;";>Home</i></a></p>
	<p style="padding-left:1200px;font-size:20px;"><a href="front.php"  class="button"><i class="fa fa-sign-out" style="float:left; text-align:center;";>logout</i></a></p>
</div>
<div class="div21" style="width:100%;height:92%;background-color:transparent;position:relative;">
	<div class="div2" style="width:20%;height:98.5%;background-color:transparent;position:absolute; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
			<p style="padding-left:50px"><a href="voting.php" class="button2"><i class="fa fa-hand-grab-o" style="font-size:140px;";></i></a></p>
			<center><p ><a href="voting.php" class="button1">VOTE</a></p></center>
			
			<p style="padding:65px 40px;"><a href="candid.php" class="button2"><i class="fa fa-users" style="font-size:140px;";></i></a></p>
			<center><a href="candid.php" class="button1">Nominee</a></center>
	
	</div>
	<div class="div3" style="left:20%;height:90%;width:28%;padding:30px 320px;background-color:transparent;position:absolute;">
		<center><h1><i class="fa fa-yelp" style="font-size:75px;color:red;";><font color="#3369E8">B</font><font color="#D50F25">a</font><font color="#EEB211">l</font><font color="#3369E8">l</font><font color="#009925">o</font><font color="#D50F25">t</font></i></h1></center>
		<h1>election status</h1>
		<div id="piechart"></div>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

		<script type="text/javascript">
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);
		function drawChart() {
		  var data = google.visualization.arrayToDataTable([
		  ['part ', 'votes'],
		  <?php 
					$servername = "localhost";
					$username = "root";
					$password = "39503950";
					$dbname="oballot";
					$conn = mysqli_connect($servername, $username, $password,$dbname);
					if (!$conn){
							die("Connection failed: " . mysqli_connect_error());
							}
					$result = mysqli_query($conn,"SELECT party,votes FROM votes");
					
					while($row = mysqli_fetch_array($result))
					{
						echo "['".$row['party']."',".$row['votes']."]";
						echo ",";
					}
					$result1=mysqli_query($conn,"SELECT sum(votes) as sv FROM votes");
					$row1 = mysqli_fetch_array($result1);
					$cmpvotes=$row1['sv'];
					
					$result2=mysqli_query($conn,"SELECT count(*) as cv FROM voter");
					$row2 = mysqli_fetch_array($result2);
					$ttlvotes=$row2['cv'];
					$remvotes=$ttlvotes-$cmpvotes;
					
					echo "['Not voted people',".$remvotes."]";
					
					
			?>
					
		  
		]);

		  var options = { 'width':600, 'height':400};

		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		  chart.draw(data, options);
		}
		</script>

	</div>
</div>
</body>
</html>
<script>
function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>