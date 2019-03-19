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
   </head>
   <body >
    	<br><br><br>><br><br>
            
        <div class="row">
        	<div class="col s6 m4 offset-m4">
        		<form name ="login" method="POST" action="login.php" >
					<div class="card">
						<div class="card-action black white-text">
        				<h3>Login Form</h3>
						</div>
            
						<div class="card-content">
                	
							<div class="form-field">
							<label for="username">Username</label>
							<input type="text" id="Username" name="uname" required />
							</div>
							<br>  
							<div class="form-field">
							<label for="password">password</label>
							<input type="password" id="password" name="pass" required />
							</div>
                            <div class="form-field">
                		    <p class="center-align">
							<input type="submit" name="login_btn" value="LOGIN" class="btn btn-large black " href="homepage1.php" /></p>
							</div>
							<br>
						</div>
					</div>
				</form>
			</div>
		</div>
	
		<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>
