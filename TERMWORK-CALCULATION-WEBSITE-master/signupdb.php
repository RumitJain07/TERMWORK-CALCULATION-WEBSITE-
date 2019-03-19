 <?php
include 'dbh.php';

if(isset($_POST['signup_btn'])){
$name =$_POST['name_txt'];
$pass = $_POST['pass_txt'];
$email =$_POST['email_txt'];

	$query = "INSERT INTO `signup` (`Name`, `Password`, `Email_id`) VALUES ('$name','$pass','$email')";
		
	$result = mysqli_query($conn,$query);
	if(mysqli_affected_rows($conn) > 0){
			 header("Location:homepage1.php");
	}else{
		echo "Error".mysqli_error($conn);
	}

 
}
 ?> 