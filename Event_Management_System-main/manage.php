<!-- <?php?> -->
<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:Aut_Login.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
			*{
				font-family: "Times New Roman", Times, serif;
				background-color: #f2f2f2;
				
			}
			/*.back{
				background-color: black;
				color: white;
				font-size: 1.5vw;
				margin-top: 1vw;
				margin-bottom: 1vw;
			}*/
			

			button.btn{
				color: black;
				/*background-color: lightblue;*/
				font-size: 1.5vw;
				margin-top: 1vw;
				margin-bottom: 1vw;
				border-radius: 10px;
			}
			button.btn:hover{
				/*background: #e6e6e6;*/
				color: white;
			}
			h1{
				font-size: 45px;
				font-weight: normal;
				color: #1a1a1a;
				text-shadow: 0px 0px 5px #404040;
			}
			.vl {
				
				border-left: 2px solid black;
				height: 450px;
				position: absolute;
				left: 50%;
				margin-left: -3px;
				top: 8;
			}
			.image{
				box-shadow: 2px 2px 3px #1a1a1a;
			}
			
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<!-- <a href="index.php"><button class="btn back">Back to Home</button></a> -->
			<br><br><br><br>
			<div class="row">

				<div class="col-6">
					
					<img src="images/EMS1.jpeg" class="image" alt="" style="height: 470px; width: 620px; border-radius: 50px;">
				</div>
				<div class="vl"></div>
				
				<div class="col-6 opt">
					<h1> Let people know about your service </h1>
					<div><a href="ReqAs_Community_Centre.php"><button class="btn" style="background-color: lightblue">Community Centre</button></div>
					<div><a href="ReqAs_Restaurant.php"><button class="btn" style="background-color: lightblue">Restaurant</button></div>
					<div><a href="ReqAs_Photography.php"><button class="btn" style="background-color: lightblue">Photography</button></a></div>
					<div><a href="ReqAs_Seminar.php"><button class="btn" style="background-color: lightblue">Seminar</button></div>

					<div><a href="Aut_Logout.php"><button class="btn btn-danger">Logout</button></div>
				</div>
			</div>
		</div>
		
	</body>
</html>