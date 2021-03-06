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
	</head>
	<style>
		*{
			font-family: "Times New Roman", Times, serif;
			/*background-color: #f2f2f2;*/
		}

		.main-form{
			background: lightblue;
			font-size: 1.5vw;
			padding: 3vw;
			margin: auto;
			border-radius: 3vw;
			box-shadow: 5px 5px 15px 5px #888888;
		}
		label{
			color: black;
			font-size: 1.5vw;
		}
		input{

			font-size: 1.5vw;
		}
		.ttl p{
			font-size: 2vw;
		}
		.createtxttt{
			background: lightblue;
			color: black;
			font-size: 1.5vw;
			padding:.2vw 1vw .2vw 1vw;
			border-radius: 8vw;
		}
		button.back{
			background:lightgreen;
			color: white;
			font-size: 1.5vw;
			margin-right: 1vw;
			margin-top: 1vw;
			margin-bottom: 1vw;
		}
		button.back:hover{
			background: green;
			color: white;
			border-style: outset;
			border-color: green;
		}
		.img{
			margin: 1vw;
		}
		

	</style>
	<body>
		<div class="container-fluid d-flex justify-content-end">
			<!-- <a href="index.php"><button class="btn back">Home</button></a>
			<a href="manage.php"><button class="btn back">Back to Manage</button></a> -->
			<a href="Personal_Profile_CC.php?CC_Name=<?php echo $_SESSION['username'] ?>"><button class="btn back">Profile</button></a>

		</div>
		<div class="container-fluid">
			<div class="ttl">
				<div class="d-flex justify-content-center">
					<p align="center" class=" text-center createtxttt">Create Account</p>
				</div>
			</div>
			<form action="uploadRCC.php" method="post" enctype="multipart/form-data">
				
				<div class="row">
					
					<div class="col-2"></div>
					<div class="col-8">
						<div class="main-form">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="name" class="form-control" placeholder="Community Centre Name(must be same as username)" value="" style="margin-right: 10vw;"  autocomplete="off"  >
							</div>
							<div class="form-group">
								<div class="form-inline">
									<input type="text" name="mobile" class="form-control" placeholder="mobile no" value="" style="margin-right: 10vw;"  autocomplete="off"  >
									<input type="email" name="email" class="form-control" placeholder="email" value="" autocomplete="off"  >
								</div>
							</div>
							
							<div class="form-group">
								<label>Address</label>
								<textarea name="address" class="form-control" autocomplete="off"  ></textarea>
							</div>
							<div class="form-group">
								<input type="text" name="availibility" class="form-control" placeholder="Availibility" value="" style="margin-right: 10vw;"  autocomplete="off"  >
							</div>
							<div class="form-group">
								<input type="text" name="capacity" class="form-control" placeholder="Capacity" value="" style="margin-right: 10vw;"  autocomplete="off"  >
							</div>
							<div class="form-group">
								<label>Extra Facilities</label>
								<textarea name="extra_facilities" class="form-control" autocomplete="off"  ></textarea>
							</div>
							<div class="form-group">
								<input type="text" name="avg_exp" class="form-control" placeholder="Average Expenditure" value="" style="margin-right: 10vw;"  autocomplete="off"  >
							</div>

							

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp" class="form-control" autocomplete="off"  placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp1" class="form-control" autocomplete="off"  placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp2" class="form-control" autocomplete="off"  placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp3" class="form-control" autocomplete="off"  placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp4" class="form-control" autocomplete="off"  placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp5" class="form-control" autocomplete="off"  placeholder=""  value=""/>
								</div>
							</div>



							<button type="submit" name = "submit" class="btn btn-success">Create Account</button>
						</div>
					</div>
					<div class="col-2"></div>
				</div>
			</form>
		</div>
		
	</body>
</html>