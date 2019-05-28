<?php
session_start();
include('../dbconnect.php');
//$_SESSION['unm']=$username;
//if(!isset($_SESSION['unm']))
//{
	//header('location:../index.php');
	//exit;
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>User PROFILE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form  action="edit_action.php" method="post"class="login100-form validate-form flex-sb flex-w" >
				
				                              <?php
											  $email=$_SESSION['unm'];
											  
										       $sql1="select * from tble_userreg where email_id='$email'  ";
	                                           $result=mysqli_query($con,$sql1);
	                                           $rowcount=mysqli_num_rows($result);
                                               if($rowcount!=0)
	                                             {
	                                               while($row=mysqli_fetch_array($result))
	                                                {  
														//$id=$row['reg_id'];
                                                      $name =$row['name'];
                                                      $emailid=$row['email_id'];
                                                      $contactno=$row['contact no'];
													  //$username=$row['username'];
													  //$password=$row['password'];
													}}	
                                        ?>  
										
					<span class="login100-form-title p-b-32">
						<center>Profile </center>
					</span>

					<span class="txt1 p-b-11">
						Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="text" name="name" value="<?php echo $name?>" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Email Id
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="email" name="email" value="<?php echo $emailid?>" disabled >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Contact No
					</span>
					<div class="wrap-input100 validate-input m-b-12" >
						<span class="btn-show-pass">
							
						</span>
						<input class="input100" type="text" name="contactno" value="<?php echo $contactno?>" > 
						<span class="focus-input100"></span>
					</div>
					<!--<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" value="<?php echo $emailids?>" > 
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							
						</span>
						<input class="input100" type="password" name="password"  value="<?php echo $password?>" > 
						<span class="focus-input100"></span>
					</div>-->
					
					

					<div class="container-login100-form-btn"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						<button class="login100-form-btn" name="submit" value="update" >
							Update 
						</button> 
						
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>