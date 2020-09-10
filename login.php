<?php
	include_once 'header.php';
	session_start();
	if(isset($_SESSION["invalid"])){
		unset($_SESSION["invalid"]);
		?>
		<script>
		  <?php echo "alert('Invalid username or password')"; ?> 
		</script>
		<?php
	}
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<TITLE>Login</TITLE>	
	</head>
		<body>	 
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Login		
							</h1>	
						<!-- 	<p class="text-white link-nav"><a href="index.html">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="login.php">Login</a></p> -->
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->

		<form action="login_back.php" method="post" autocomplete="off"> 
		   <table align="center" width="348" height="216">
			<tr>
				<td style="padding-top:20px">
					<b>Email id</b>
				</td>
				<td>
					<div class="mt-10">
						<input class="genric-btn primary-border square" type="text" name="email" placeholder="Email id" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Id'">
					</div>
				</td>
		  </tr>
		  <tr>
		  	<td height="34"></td>
		  	<td>
				<?php
					if(isset($_SESSION['usernamenullerror']))
					{
						echo "<font color='red'>please enter username</font>";
						unset($_SESSION['usernamenullerror']);
					}
				?></td></tr>
				<tr>
						<td><b>Password</b></td>
					<td>
						<div class="mt-10">
						<input class="genric-btn primary-border square" type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="single-input">
					</div>	
					</td>
				</tr><tr><td height="36"></td>
				<td>
				<?php
					if(isset($_SESSION['passwordnullerror']))
					{
						echo "<font color='red'>please enter password</font>";
						unset($_SESSION['loginerror']);
						unset($_SESSION['passwordnullerror']);
					}
					elseif(isset($_SESSION['loginerror']))
					{
						echo "<font color='red'>Invalid username or password</font>";
						unset($_SESSION['loginerror']);
					}
				?></td></tr>
				<tr>
				  	<td><a href="#" class="genric-btn primary circle" name="btn_login" name="btn_login">Forget Password</a>
				  	</td>
					<td colspan="3" align="center">
			
					<input class="genric-btn primary circle" type="submit" name="btn_login" value="Login" >
		</form>
		<form action="registration.php" method="post">
		  </td>
		  	<td>
		  		<input class="genric-btn primary circle"  type="submit" name="register" value="Register" >
		  	</td>
		  </table>
		</form>	

<?php
	include_once 'footer.php'
?>	
		</body>
	</html>