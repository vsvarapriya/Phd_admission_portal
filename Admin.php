<?php
session_start();
$email="";
$name="";

if(!empty($_SESSION['email'])){
 $email=$_SESSION['email'];
 }
 else{
 	exit();
 }
 $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
 if($conn){
 	$sql="select Name from adminlogin where Email='$email'";
 	$result=mysqli_query($conn,$sql);
 	$result=mysqli_fetch_row($result);
 	$name=$result[0];
 	$sql1="select count(*) from userlogin where Status='Pending'";
 	$result=mysqli_query($conn,$sql1);
 	$result=mysqli_fetch_row($result);
 	$count=$result[0];
 	mysqli_close($conn);
 }
 else{
     echo "connection lost";
 }
 
?>
<!DOCTYPE html>
 <html>
<head>
 <title>PhD Admissions_NIT_AP</title>
 <style type="text/css">
 	.error{
 		color: red;
 	}
 </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
</head>
<body class="body">
	<div class="container" style=" padding-top: 20px;">
			<div class="row">
			<div class="col-xs-2">
				 <a title="www.nitandhra.ac.in" href="https://www.nitandhra.ac.in/main/"><img src="logo.png" alt="NIT_AP LOGO" class="img_circle" style="width: 80%"></a>
			</div>
			<div class="col-xs-8" style="text-align: center; padding-top: 10px; color: blue">
				<h2>PhD APPLICATION PORTAL</h2>
				<h4 style="color: black">National Institute of Technology AndhraPradesh</h4>
			</div>
			<div class="col-xs-2" >
				 <img src="mhrd-logo.jpg" alt="mhrd-logo" class="img_circle" style="width: 80%">
			</div>
		    </div>
	</div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">         
       
       <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Welcome :<?php echo "$name";?></a></li>
         <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
       </ul>
	  </div>
	</nav>
	<div class='container well'>
		<br><br><br>
	<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
		<div class='text-center'>
		<h4>No of Pending Applications:<?php echo "$count &emsp; &emsp;"; ?><button type="submit" name="see" class="btn btn-primary">View</button></h4>
	</div>
	<br><br><br>

	<?php
  $c="";
  $Array="";
  if($count >0){

  
	echo '   <div class="form-group">
    
    <div class="col-xs-offset-3 col-xs-5">
        <select name = "Dp1"  class="form-control dropdown">
        <option value="none" selected disabled hidden> Filter by Department    </option>
       <option value="Bio-Technology">Bio-Technology</option>
        <option value="Chemical Engineering">Chemical Engineering</option> 
        <option value="Civil Engineering">Civil Engineering</option> 
        <option value="Computer Science and Engineering">Computer Science and Engineering</option> 
        <option value="Electrical Engineering">Electrical Engineering</option>
        <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>  
        <option value="Mechanical Engineering">Mechanical Engineering</option> 
        <option value="Metallurgical and Materials Engineering">Metallurgical and Materials Engineering</option> 
        <option value="School of Sciences">School of Sciences</option> 
         <option value="School of Humanities">School of Humanities</option> 
      </select>
    </div>
  <div class="col-xs-4 ">
 
         <button type="submit" name="filter" class="btn btn-primary">Filter And View</button>  
  </div>
  </div>';
echo  nl2br("\n\n");

     
	 if(isset ( $_POST['see'])){
	 	
	 		
                $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
               if($conn){
                  $sql="select ApplicationId,Date as AppliedDate,Name,Email,Department as DepartmentPreffered,Research as AreaOfResearch,Programme from userlogin where Status='Pending' ";
                  $result=mysqli_query($conn,$sql);
                  echo "<table class='table table-hover'> <thead><tr>";

                  while($fieldinfo=mysqli_fetch_field($result)){
                    echo "<th> $fieldinfo->name </th>";
                  }
                  echo "<th>Action</th></tr></thead>";
                  while($row=mysqli_fetch_row($result)){
                  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td><a href=\"#\" onclick=\"window.open('views.php?value=$row[0]');\">View</a></td></tr>";
                  }
                  echo "</table>";
                  mysqli_close($conn);
                }
            }
            if(isset($_POST['filter'])){
            	if(!empty($_POST['Dp1'])){
            $branch=$_POST['Dp1'];
             
              $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
               if($conn){
                  $sql="select ApplicationId,Date as AppliedDate,Name,Email,Department as DepartmentPreffered,Research as AreaOfResearch,Programme from userlogin where Status='Pending' and Department='$branch' ";
                  $result=mysqli_query($conn,$sql);
                  echo "<table class='table table-hover'> <thead><tr>";

                  while($fieldinfo=mysqli_fetch_field($result)){
                    echo "<th> $fieldinfo->name </th>";
                  }
                  echo "<th>Action</th></tr></thead>";
                  while($row=mysqli_fetch_row($result)){
                  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td><a href=\"#\" onclick=\"window.open('views.php?value=$row[0]');\">View</a></td></tr>";
                  }
                  echo "</table>";
                  mysqli_close($conn);
                }
            }
	 	     }}
         else{ 
              $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
               if($conn){
                $sql1="select count(*) from userlogin where Status='Selected in 1st level'";
                $result=mysqli_query($conn,$sql1);
                 $result=mysqli_fetch_row($result);
                  $count3=$result[0];
                  mysqli_close($conn);
              }
           if($count3>0) {
         
           echo "<h4 class='text-center'> No more pending requests";
           echo nl2br("\n\n<form  method='post' action='Admin.php'>");
           echo "<div class='text-center'>
          <button type='submit' name='enter' class='btn btn-primary'>Enter Test Result</button>
           
        </div></form>";

          if(isset($_POST['enter'])){
          $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
          if($conn){
            $sql="select ApplicationId from userlogin where Status='Selected in 1st level'";
            $result=mysqli_query($conn,$sql);
             echo nl2br("\n\n<form  method='post' action='Admin.php'>");
             $c=mysqli_num_rows($result);
             $Array=array_fill(0, $c,"l");
             echo "<table class='table table-hover'> <thead ><tr >";
                  
                  while($fieldinfo=mysqli_fetch_field($result)){
                    echo "<th >$fieldinfo->name </th>";
                  }
                      echo "<th>Exam Result</th></tr></thead>";
                       $i=0;
                     while($row=mysqli_fetch_row($result)){
                        $Array[$i]=$row[0];
                        echo "<tr class='text-left'><td>$row[0]</td><td><input type='text' name='$row[0]'></td></tr>";
                      }
                      mysqli_close($conn);
                      echo "</table><div class='container'><div class='text-left'><button type='submit' name='submit' class='btn btn-primary'>Submit</button></div></div.</form>";
               }
             }}
             else{
               echo "<h4 class='text-center'> No more Pending Applications!";
             }
             if(isset($_POST['submit'])){
              $q="";
              $check=1;
                    $sql="";
                     $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
                     if($conn){
                      $sql="select ApplicationId from userlogin where Status='Selected in 1st level'";
                        $result=mysqli_query($conn,$sql);
            
                          $c=mysqli_num_rows($result);
                      $Array=array_fill(0, $c,"l");
                      $i=0;
                      while($row=mysqli_fetch_row($result)){
                        $Array[$i]=$row[0];
                        $i++;
                      }
                    for($i=0;$i<$c;$i++){
                      if(!empty($_POST["$Array[$i]"])){
                      $value=$_POST["$Array[$i]"];
                    }
                     

                      $sql="UPDATE `userlogin` SET `TestResult` = '$value' WHERE `userlogin`.`ApplicationId`='$Array[$i]'";
                      
                      if(!mysqli_query($conn,$sql)){
                          echo "query wrong";
                          $check=0;
                      
                    }
                    else{
                      $q=nl2br("Updated Successfully!!!\n");

                    }
                  }
                  if($check!=0){
                     echo "<h4 class='text-success text-center'>$q</h4>";
                      $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
               if($conn){
                $sql1="select count(*) from userlogin where Status='Selected in 1st level'";
                $result=mysqli_query($conn,$sql1);
                 $result=mysqli_fetch_row($result);
                  $counts=$result[0];
                  if($counts>0){
                  $sql="select ApplicationId,Date as AppliedDate,Name,Email,Department as DepartmentPreffered,Research as AreaOfResearch,Programme,TestResult as WrittenTestResult from userlogin where Status='Selected in 1st level' ORDER BY TestResult DESC ";
                  $result=mysqli_query($conn,$sql);
                  echo "<table class='table table-hover'> <thead><tr>";

                  while($fieldinfo=mysqli_fetch_field($result)){
                    echo "<th> $fieldinfo->name </th>";
                  }
                  echo "<th>Action</th></tr></thead>";
                  while($row=mysqli_fetch_row($result)){
                  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td><a href=\"#\" onclick=\"window.open('viewss.php?value=$row[0]');\">View</a></td></tr>";
                  }
                  echo "</table>";}
                  mysqli_close($conn);
                
                }
                  }
                }

             }
                
          }?>
             
	<br>
	<br>
	<br>
	<br>
	<br>
<br>
	</form>
	</body>
	</html>