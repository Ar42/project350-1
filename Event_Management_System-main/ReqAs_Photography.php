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
			<a href="Personal_Profile_Photography.php?people=<?php echo $_SESSION['username'] ?>"><button class="btn back">Profile</button></a>
		</div>
		<div class="container-fluid">
			<div class="ttl">
				<div class="d-flex justify-content-center">
					<p align="center" class=" text-center createtxttt">Create Account</p>
				</div>
			</div>
			<form action="uploadPhotography.php" method="post" enctype="multipart/form-data">
				
				<div class="row">
					
					<div class="col-2"></div>
					<div class="col-8">
						<div class="main-form">
							<div class="form-group">
								<div class="form-inline">
									<input type="text" name="username" class="form-control" placeholder="Name(must be same as username)" value="" style="margin-right: 10vw;" autocomplete="off" >
									<input type="text" name="age" class="form-control" placeholder="age"autocomplete="off" value="">
								</div>
							</div>
							<div class="form-group">
								<div class="form-inline">
									<input type="text" name="mobile" class="form-control" placeholder="mobile no" value="" style="margin-right: 10vw;"  autocomplete="off" >
									<input type="email" name="email" class="form-control" placeholder="email" value="" autocomplete="off" >
								</div>
							</div>
							
							<div class="form-group">
								<label>Address</label>
								<textarea name="address" class="form-control" autocomplete="off" ></textarea>
							</div>
							<div class="form-group">
								<label>Experience</label>
								<textarea name="experience" class="form-control" autocomplete="off" ></textarea>
							</div>
							<div class="form-group">
								<label>Device Information</label>
								<textarea name="di" class="form-control" autocomplete="off" ></textarea>
							</div>
							<div class="form-group">
								<label>Accessories</label>
								<textarea name="accessories" class="form-control" autocomplete="off" ></textarea>
							</div>
							<div class="form-group">
								<label>Earlier Works</label>
								<textarea name="earlier_works" class="form-control" autocomplete="off" ></textarea>
							</div>
							<div class="form-group">
								<label>Profile Picture</label>
								<input type="file" name="pp" class="form-control" autocomplete="off" value="">
							</div>



							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp0" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp1" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp2" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp3" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp4" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp5" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp6" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp7" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
							</div>


							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp8" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp9" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
							</div>

							<div class="form-inline ">
								<div class="form-group img">
									<input type="file" name="pp10" class="form-control" autocomplete="off"   placeholder=""  value=""/>
								</div>
								<div class="form-group img">
									<input type="file" name="pp11" class="form-control" autocomplete="off"   placeholder=""  value=""/>
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