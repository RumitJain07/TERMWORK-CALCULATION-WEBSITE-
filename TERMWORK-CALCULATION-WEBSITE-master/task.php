<?php
session_start();
	if(!isset($_SESSION["student_name"]))
		 header("Location:homepage1.php")
?>
 <?php
    include 'dbh.php';
	ERROR_REPORTING(E_ALL^E_NOTICE);
    if(isset($_POST['task_btn']))
		
    {
			$rollno= $_POST['rollno'];
			$name = $_POST['name'];
			$year = $_POST['year'];
			$branch = $_POST['branch'];
			$semester= $_POST['semester'];
			$subject= $_POST['subject'];
			
				
				$query = "INSERT INTO class_details (rollno, name, year,branch,semester ,subject) VALUES ('$rollno','$name','$year','$branch','$semester' ,'$subject')";
					//		$query1 = "SELECT * FROM `your_table_name` ORDER BY $id DESC Limit 1";
					//	$result1 = mysqli_query($conn,$query);
				$result = mysqli_query($conn,$query);
					if(mysqli_affected_rows($conn) > 0)
					{
					echo "inserted successfully";
					}
					else
					{
					echo "Error".mysqli_error($conn);
					}
	}
?>		

<hmtl>
<head>
<title>	 </title>
 <!--<link rel="stylesheet" type="text/css" href="style.css">-->
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>
 <script>
	function myFunction() 
	{
		var table = document.getElementById("myTable");
		var rows = table.rows;
   
		for (var i = 1; i < rows.length; i++) 
		{
			var cells = rows[i].cells;
			var sum = 0;
			var numbers = 0;
				for (var x = 2; x < (cells.length -1); x++)
				{
					var cell = cells[x];
					var addme = parseInt(cell.innerHTML);
					if(!isNaN(addme))
						{       
						sum += addme;
						numbers++;
						}
				}
			var average = sum / numbers;
			rows[i].cells[13].innerHTML = "<td>" + Math.round(average) + "</td>";
			var sum = Math.round(average);
			localStorage.setItem("average",sum);

		}
	}
  </script>
  <script>
		var instance = M.Tabs.init(el, options);
  </script>
  <script>
	$(document).ready(function(){
    $('.tabs').tabs();
	});
  </script>
  <script>
	$(document).ready(function(){
    $('.dropdown-trigger1').dropdown();
	});
  </script>
  <script>
	$(document).ready(function(){
    $('.dropdown-trigger2').dropdown();
    });
  </script>
  <script>
	$(document).ready(function(){
    $('.dropdown-trigger3').dropdown();
	});
  </script>
  <script>$(document).ready(function(){
    $('select').formSelect();
	});
  </script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
    <body >
		
		 <ul class="tabs tabs-fixed-width tab-demo z-depth-3 white-tab">
		<li class="tab black "><a class=" black-text #26a69a teal lighten-1"  href="#test1" >CREATE CLASS</a></li>
		<li class="tab"><a class=" black-text #26a69a teal lighten-1" href="#test2">UPDATE TASK</a></li>
		<li class="tab black"><a class=" black-text #26a69a teal lighten-1"   href="#test3">TERMWORK </a></li>
		
		</ul>
		<br>
		<a class="waves-effect btn-large black white-text	 right" href="logout.php" style="margin:5px;">LOGOUT</a>
			
      <div id="test1" class="col s12">
  
  <div class="container">
     <div class="card lime lighten-5">
	 <div class="container">
	 <br>
	 <h4> Enter Class Details </h4>
 <form   method="POST" name=signup" action=" ">
 <br><br>
  
		<label for="year">YEAR</label>
	<select id="year" name="year" required>
		<option value="#">Select year</option>
		<option value="FE">FE</option>
		<option value="SE">SE</option>
		<option value="TE">TE</option>
		<option value="BE">BE</option>
	</select>
	<br>
	<label for="branch">BRANCH</label>
	<select id="branch" name="branch" required>
		<option value="#">Select Branch</option>
		<option value="IT">IT</option>
		<option value="COMPS">COMPS</option>
		<option value="Civil">Civil</option>
		<option value="EXTC">EXTC</option>
		<option value="ETRX">ETRX</option>
	</select>
	<br>
	
	<label for="semester">SEMESTER</label>
	<select id="semester" name="semester" required>
	<option value="#">Select Semester</option>
		<option value="FIRST HALF">FIRST HALF</option>
		<option value="SECOND HALF">SECOND HALF</option>
		
	</select>	
		<br>
		<label for="subject">SUBJECT</label>
	<select id="subject" name="subject" required>
	<option value="#">Select Subject</option>
		<option value="ip">IP</option>
		<option value="dbms">DBMS</option>
		<option value="dsa">DSA</option>
		<option value="iot">IOT</option>
		<option value="maths">MATHS</option>
		
	</select>	
		<br>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="name" name="name" type="text" class="validate " required>
          <label for="first_name">NAME</label>
        </div>
		  </div>
		<br>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="" id="name" name="rollno" type="NUMBER" class="validate" required>
          <label for="first_name">ENTER YOUR ROLL NUMBER</label>
        </div>
		</div>
	
         <p class="center-align ">
         <input type="submit" name="task_btn" value="submit" class="btn btn-large  #26a69a teal lighten-1" href="task.php" /> 
        </p>
        <br>
</form>
  
  
  

  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
 
    
	 </div>
   
   <div id="test2" class="col s12">
   <br>
   
     <div class="card card lime lighten-5">
       <div class="container black_text">
	    <form   method="POST" name=signup" action="task.php" ">
 <br><br>
  
		<label for="year" >YEAR</label>
	<select  id="year" name="year" required>
		<option value="#">Select year</option>
		<option value="FE">FE</option>
		<option value="SE">SE</option>
		<option value="TE">TE</option>
		<option value="BE">BE</option>
	</select>
	<br>
	<label for="branch">BRANCH</label>
	<select id="branch" name="branch" required>
		<option value="#">Select Branch</option>
		<option value="IT">IT</option>
		<option value="COMPS">COMPS</option>
		<option value="civil">Civil</option>
		<option value="EXTC">EXTC</option>
		<option value="ETRX">ETRX</option>
	</select>
	<br>
	
	<label for="semester">SEMESTER</label>
	<select id="semester" name="semester" required>
	<option value="#">Select Semester</option>
		<option value="FIRST HALF">FIRST HALF</option>
		<option value="SECOND HALF">SECOND HALF</option>

		
	</select>
	<br>
<label for="subject">SUBJECT</label>
	<select id="subject" name="subject" required>
	<option value="#">Select Subject</option>
		<option value="ip">IP</option>
		<option value="dbms">DBMS</option>
		<option value="dsa">DSA</option>
		<option value="iot">IOT</option>
		<option value="maths">MATHS</option>
		
	</select>	
		<br>	
		
	
         <p class="center-align ">
			<input type="submit" name="assignment_btn" value="submit" class=" btn-large #26a69a teal lighten-1 black-text"   /> 
        </p>
        <br>
</form>
<?php
if(isset($_POST['t_btn']))
{

$a = mysqli_real_escape_string($conn, $a);
	$a = $_POST['avg'];
	ECHO $a;
$query = "insert into termwork_details(average) values ($a)";
				$result = mysqli_query($conn,$query);
				$count = mysqli_affected_rows($conn);
				if($count > 0){
					echo "inserted";
				}else{
					echo "Error".mysqli_error($conn);
				}
				/*if(!mysqli_query($con,$result))
				{
					die('Error:' .mysqli_error($con));
				}
				echo"1 record adeed";*/
}

?>
</div>
</div>
<p class="right">
		<!--<button  onclick="" class="button black white-text  btn-large" name ="termwork_btn" style="margin:5px;">Submit Termwork</button>-->
		<!--<input type="submit" name="t_btn" value="submit termwork" />
		</p-->
    
		<p class="right">
		<button  onclick="myFunction()" class="button1 black white-text  btn-large "  style="margin:5px;">Calculate Termwork</button>
		</p>
       <table  id="myTable" style="width:100%" >
  <tr>
    <th id="rollno" class=" #26a69a teal lighten-1">Roll No</th>
    <th id="name" class=" #26a69a teal lighten-1">Name</th>
    <th class=" #26a69a teal lighten-1">Assignment 1</th>
    <th class=" #26a69a teal lighten-1">Assignment 2</th>
    <th class=" #26a69a teal lighten-1">Assignment 3</th>
    <th class=" #26a69a teal lighten-1">Assignment 4</th>
    <th class=" #26a69a teal lighten-1">Assignment 5</th>
	 <th class=" #26a69a teal lighten-1">Experiment 1</th> 
	 <th class=" #26a69a teal lighten-1">Experiment 2</th>
	  <th class=" #26a69a teal lighten-1">Experiment 3</th>
	   <th class=" #26a69a teal lighten-1">Experiment 4</th> 
	   <th class=" #26a69a teal lighten-1">Experiment 5</th>
	   <th class=" #26a69a teal lighten-1">Mini Project</th>
    <th class=" #26a69a teal lighten-1" >Final</th>

  </tr>
 <?php
 include 'dbh.php';
 if(isset($_POST['assignment_btn']))
		{
			$y = $_POST['year'];
			$b =$_POST['branch'];
			$s = $_POST['semester'];
			
		//$query = "select year,branch from class_details";
		$query = "select * from class_details where year ='$y' &&  branch='$b' ";
		
		$result = mysqli_query($conn,$query);
		
		 while($a = mysqli_fetch_array($result))
	{
		?>
  
  <tr>
   <!--<td contenteditable='false'> </td>-->
   <td> <?php echo $a['rollno'];  ?></td>
    	 <td> <?php echo $a['name'];  ?></td>
   <!-- <td> <?php echo $a['average'];?> </td>-->
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
	 <td contenteditable='true' ></td>
	  <td name="avg"></td>
  </tr>
  
  <?php
	}
  }
  ?>
   <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>
  <tr>
    <td contenteditable='false'> </td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
	
    <td></td>
  </tr>
  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'> </td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>
  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>
  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>
  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>
  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>
<tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

  <tr>
    <td contenteditable='false'></td>
    <td contenteditable='false'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	<td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
    <td contenteditable='true'></td>
	 <td contenteditable='true'></td>
    <td></td>
  </tr>

</table>
</div>
 
            


  
 
    <div id="test3" class="col s12">
	
	<br>
   
     <div class="card card lime lighten-5">
       <div class="container black_text">
	    <form   method="POST" name=signup" action="task.php" ">
 <br><br>
  
		<label for="year" >YEAR</label>
	<select  id="year" name="year" required>
		<option value="#">Select year</option>
		<option value="FE">FE</option>
		<option value="SE">SE</option>
		<option value="TE">TE</option>
		<option value="BE">BE</option>
	</select>
	<br>
	<label for="branch">BRANCH</label>
	<select id="branch" name="branch" required>
		<option value="#">Select Branch</option>
		<option value="IT">IT</option>
		<option value="COMPS">COMPS</option>
		<option value="civil">Civil</option>
		<option value="EXTC">EXTC</option>
		<option value="ETRX">ETRX</option>
	</select>
	<br>
	
	<label for="semester">SEMESTER</label>
	<select id="semester" name="semester" required>
	<option value="#">Select Semester</option>
		<option value="FIRST HALF">FIRST HALF</option>
		<option value="SECOND HALF">SECOND HALF</option>

		
	</select>
	<br>
<label for="subject">SUBJECT</label>
	<select id="subject" name="subject" required>
	<option value="#">Select Subject</option>
		<option value="ip">IP</option>
		<option value="dbms">DBMS</option>
		<option value="dsa">DSA</option>
		<option value="iot">IOT</option>
		<option value="maths">MATHS</option>
		
	</select>	
		<br>	
		
	
         <p class="center-align ">
			<input type="submit" name="assignment_btn" value="submit" class=" btn-large #26a69a teal lighten-1 black-text"   /> 
        </p>
        <br>
</form>
</div></div>
</div>

  
  
  
  
  

 </body>
  </html>