<?php
session_start();
// if(!isset($_SESSION['username'])){
// header('location:Aut_Login.php');
// }
?> 
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php include'links.php' ?>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			*{
				font-family: "Times New Roman", Times, serif;
			}
			.main_div{
				/*background-image: url('images/restaurant.jpg');
				background-repeat: no-repeat;*/
				background-color: #e6f3ff;
				background-position: center;
				background-size: cover center;
				height: 100vh;
				filter: blur(7px);
				background-attachment: fixed;
				position: sticky;
				top: 0;
				left: 0;
			}
			.second_div{
				margin-top: -100vh;
			}
			p{
				font-size: 1.5vw;
			}
			.img-fluid{
				margin-top: .2vw;
				box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
			}
			.infos{
				background: #e6e6e6;
				border: 1vw solid #e6e6e6;
				margin-top: 1vw;
				margin-bottom: 3vw;
				border-radius: 4vw;
				opacity: 0.9;
			}
			.infos p{
				color: #000;
			}
			button.back{
				background:black;
				color: white;
				font-size: 1.5vw;
				margin-right: 1vw;
				margin-top: 1vw;
				margin-bottom: 1vw;
			}
			button.back:hover{
				background: white;
				color: red;
				border-style: outset;
				border-color: green;
			}
			.total_photographer{
				font-size: 1.5vw;
				color: #fff;
				background: red;
				margin-bottom: .7vw;
				padding:.5vw;
				box-shadow: 1vw 1vw 1.5vw black;
			}
			.infos{
				box-shadow: 1vw 1vw 1.5vw black;
			}
			.interior{
				margin-bottom: 0.7vw;

			}
			.interior img{
				height: 10vw;
				width: 15vw;
			}
			.gallery_txt{
				margin: .6vw;
				background: red;
				color: white;
				font-weight: bold;
				padding: .3vw 1vw;
				border-radius: 8vw;
				font-size: 1.5vw;
				margin-bottom: 2vw;
			}
			hr{
				background-color: #000;
				height: .1vw;
			}
			img{
				color: red;
				font-size: 1.5vw;
			}
		</style>
	</head>
	<body>
		
		<?php
			include'conn.php';
			$ids = $_GET['id'];
			
				$sq = " select * from cc where id={$ids} ";
				$query = mysqli_query($con, $sq);
				$total = "select count(id) as ttl from  cc";
				$t = mysqli_query($con, $total);
				$values = mysqli_fetch_assoc($t);
				$num_rows = $values['ttl'];
			
		?>
		
		<div class="main_div"></div>
			<div class="container-fluid second_div">
			<?php
			include 'conn.php';
			
			// $selectquery = "select * from cc";
			// $query = mysqli_query($con, $selectquery);
			// $res = mysqli_fetch_array($query);
			while($res = mysqli_fetch_array($query)) {
			?>
			<div class="container-fluid">
				



				
				<div class="row">
					<div class="col-3"></div>
					<div class="col-6 infos">
						<p>Restaurant : <?php echo $res['name']; ?></p>
						<hr>
						<p>Mobile No : <?php echo $res['mobile']; ?></p>
						<hr>
						<p>Email : <?php echo $res['email']; ?></p>
						<hr>
						<p>Address : <?php echo $res['address']; ?></p>
						<hr>
						<p>Availibility : <?php echo $res['availibility']; ?></p>
						<hr>
						<p>Capacity : <?php echo $res['capacity']; ?></p>
						<hr>
						<p>Extra Facilities : <?php echo $res['extra_facilities']; ?></p>
						<hr>
						<p>Average Expenditure : <?php echo $res['avg_exp']; ?></p>
					</div>

					<div class="col-3"></div>
				</div>
				<div class="d-flex justify-content-center">
					<p class="text-center gallery_txt" >Gallery of Interiors</p>
				</div>

				<div class="row">
					<div class="col-2"></div>
					<div class="col-8">
						<div class="row">
							<div class="col-4 interior">
								<img src="<?php echo $res['pp']; ?>" alt="no image" class="img-fluid">
							</div>
							<div class="col-4 interior">
								<img src="<?php echo $res['pp1']; ?>" alt="no image" class="img-fluid">
							</div>
							<div class="col-4 interior">
								<img src="<?php echo $res['pp2']; ?>" alt="no image" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-2"></div>
				</div>

				<div class="row">
					<div class="col-2"></div>
					<div class="col-8">
						<div class="row">
							<div class="col-4 interior">
								<img src="<?php echo $res['pp3']; ?>" alt="no image" class="img-fluid">
							</div>
							<div class="col-4 interior">
								<img src="<?php echo $res['pp4']; ?>" alt="no image" class="img-fluid">
							</div>
							<div class="col-4 interior">
								<img src="<?php echo $res['pp5']; ?>" alt="no image" class="img-fluid">
							</div>
						</div>
					</div>
					<div class="col-2"></div>
				</div>


			</div>
			<?php
			
			}
			?>
		</div>
		
	</body>
</html>