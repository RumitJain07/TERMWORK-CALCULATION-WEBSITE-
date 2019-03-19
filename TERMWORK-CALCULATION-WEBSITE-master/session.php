<?php
   include 'dbh.php';
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select Name from signup where Name = '$name' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>