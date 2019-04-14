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
</head>
<body>
<div class="div1" style="width:100%;height:8%;background-color:Dodgerblue;">
	<p style="padding-left:40px;"><a href="dashboard.php" class="button"><i class="fa fa-user-circle" style="float:left;";>Admin</i></a></p>
	<p style="padding-left:1200px;font-size:20px;"><a href="front.php"  class="button"><i class="fa fa-sign-out" style="float:left; text-align:center;";>logout</i></a></p>
</div>
<div class="div21" style="width:100%;height:92%;background-color:transparent;position:relative;">
	<div class="div2" style="width:17%;height:100%;background-color:Azure;position:absolute; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
		<p style="padding-top:10px;"><a href="addvoter.php" class="button"><i class="fa fa-user-plus" style="float:left;";> Add voter</i></a></p>
		<p style="padding-top:10px;"><a href="delete voter.php" class="button"><i class="fa fa-scissors" style="float:left;";> remove voter</i></a></p>
		<p style="padding-top:10px;"><a href="voter table.php" class="button"><i class="fa fa-group" style="float:left;";> voter list</i></a></p>
		<p style="padding-top:10px;"><a href="nremove.php" class="button"><i class="fa fa-times-circle" style="float:left;";>Nominee </i></a></p>
		<p style="padding-top:10px;"><a href="nlist.php" class="button"><i class="fa fa-address-book" style="float:left;";>Nominee list</i></a></p>
		<p style="padding-top:10px;"><a href="table.php" class="button"><i class="fa fa-Bar-chart" style="float:left;";> status</i></a></p>
	</div>
	<div class="div3" style="left:5%;height:98%;width:83%;padding:30px 320px;background-color:transparent;position:absolute;">
			<center><h1><i class="fa fa-yelp" style="padding-left:250px;font-size:75px;color:red";><font color="#3369E8">B</font><font color="#D50F25">a</font><font color="#EEB211">l</font><font color="#3369E8">l</font><font color="#009925">o</font><font color="#D50F25">t</font></i></h1></center>
		<h1>election status</h1>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['party', 'votes'],
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

        var options = {
          title: '',
          width: 800,
          legend: { position: 'none' },
          chart: { title: '',
                   subtitle: '' },
          bars: 'horizontal',
          axes: {
            x: {
              0: { side: 'bottom', label: 'votes'}
            }
          },
          bar: { groupWidth: "50%" }
        };

        var chart = new google.charts.Bar(document.getElementById('vineediv'));
        chart.draw(data, options);
      };
    </script>
		<div id="vineediv" style="width: 300px; height: 250px;"></div>

	</div>
</div>
</body>
</html>
<script>
function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>