<?php
	session_start();
	
?>
  <!DOCTYPE html>
   <html>
   <head>
   <title>
   </title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <script>
	 $(document).ready(function()
		{
		$('.modal').modal();
		});
</script>
</head>
	<body>		
		<br><br>
		<!--form-->
		<div class="container">
			<h1 id="heading" class="center-align black-text">Signup Form</h1>
			<div class="card">
				<form   method="POST" name=signup" action="signupdb.php ">
					<div class="row">	
						<br>
						<div class="input-field col s12 ">
							<i class="material-icons prefix">account_circle</i>
							<input  id="name" type="text" name="name_txt"class="validate black-text">
							<label for="name">Username</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">https</i>
							<input id="password" type="password" name="pass_txt" class="validate">
							<label for="password">Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">email</i>
							<input id="email" type="email" name="email_txt" class="validate">
							<!--<span class="error">* <?php echo $emailErr;?></span>-->
							<label for="email">Email</label>
						</div>
					</div>
					<p class="center-align">
					<input type="submit" name="signup_btn" value="Signup" class="btn btn-large" href="homepage1.php" /> 
					</p>
					<br>				 
				</form>
			</div>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>  
	</body>
</html>