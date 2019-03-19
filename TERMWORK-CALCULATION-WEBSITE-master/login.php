 <?php
	session_start();
 ?>
 <?php
include 'dbh.php';
if(isset($_POST['login_btn']))
{
	$name = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$db = "select * from signup where Name ='$name' && Password ='$pass'";
	$res = mysqli_query($conn,$db);
	$numrows = mysqli_num_rows($res);
	if($numrows == 1)
	{
		$_SESSION["student_name"] = $name;
		header('location:task.php');
		
	}
	else
	{
		echo "Incorrect Email and Password";
		
	}
}
 ?> 
 
  