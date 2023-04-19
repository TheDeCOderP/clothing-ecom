<?php 
include "includes/header.php";
?>


<link rel="stylesheet" href="styles/register.css">


<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
				<form action="checkout.php" method="post" class="form">
					<label for="chk" aria-hidden="true">Log in</label>
					<input class="input" type="email"  placeholder="Email" name="c_email" required >
					<input class="input" type="password" name="c_pass">
					<button name="login" value="Login">Log in</button>
				</form>
			</div>

      <div class="register">
				<form class="form">
					<label for="chk" aria-hidden="true">Register</label>
					<input class="input" type="text" name="txt" placeholder="Username" required="">
					<input class="input" type="email" name="email" placeholder="Email" required="">
					<input class="input" type="password" name="pswd" placeholder="Password" required="">
					<button>Register</button>
				</form>
			</div>
	</div>