<?php 
	include_once('newheader.php');
?>
<style>
	#box{
		width: 300px;
		min-height: 0px;
		box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
		border-radius: 10px;
	} 
	.git, .twitter{
		padding-right: 7px;
	}
	#vertical_line{
		display: none;
	}

	.signUp, .admin{
		font-size: 12px;
	}
	#adminLogin a, #call2action a{
		color:red;
		text-decoration: none;
		font-size: 15px;
	}

	p, legend{
		font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
	}

	legend{
		font-size: 29.2px;
	}

	@media screen and (min-width: 768px) {
		#box{
			min-height: 200px;
			width: 650px;
		}
		#vertical_line{
			display: unset;
			height: 200px;
		}
	}
	
</style>
<?php 
	session_start();
// check if the login button is clicked
	include_once('shared/user.php');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// create object of login
	$obj = new User();

	$obj->login($_POST['email'], $_POST['password']);

	if ($obj == false) {

		$error = "<div style='color:red'>Invalid details</div>";

	}else{

		header("Location: dashboard.php");
		exit(); //this is inserted to stop the function
	}

}

?>
<!-- <div style="min-height: 30px;"> -->
	<!-- <input type="button" value="Logout" class="btn btn-danger" href="logout.php"> -->
<!-- </div> -->
<main style="min-height: 400px;">
<div class="container mt-5 mb-5 px-4 px-md-5 py-4 py-md-0" id="box">
	<div class="d-md-flex flex-row justify-content-center align-items-center">
		
		<div class="py-md-4 col-md-6 d-flex flex-column">
			<form action="" method="post">
				<fieldset>
					<legend class="text-center"><strong> Member Login </strong></legend>
					<input type="email" name="email" placeholder="Email" class="form-control ">
					<input type="password" name="password" placeholder="password" class="form-control mt-3 ">
					<input type="submit" name="submit" value="Login" class="btn btn-success mt-3">
				</fieldset>
			</form>
		</div>
		<div id="vertical_line">
		</div>

		<div class="mt-4 mt-md-0 col-md-6 mx-auto d-flex flex-column text-md-center">
			<p>If you are a new to this page, please <span id="call2action"><a href="signup.php">signup here</a></span></p>

			<p>Admin, please <span id="adminLogin"><a href="admin_login.php">login here</a></span></p>
			
		</div>
	</div>
</div>
</main>

<?php 
	include_once('footer.php');
?>