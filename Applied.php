<?php
session_start();
$email="";
$name="";
$AppId="";
if(!empty($_SESSION['email'])){
 $email=$_SESSION['email'];
 }
 else{
  exit();
 }
 $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
 if($conn){
  $sql="select Name,ApplicationId from userlogin where Email='$email'";
  $result=mysqli_query($conn,$sql);
  $result=mysqli_fetch_row($result);
  $name=$result[0];
  $AppId=$result[1];
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
         <img src="mhrd-logo.jpg" alt="mhrd-logo" class="img_circle" style="width: 80%"></a>
      </div>
        </div>
  </div>
    <nav class="navbar navbar-inverse">
                 <div class="container-fluid">
                 
                 <ul class="nav navbar-nav">
                 <li class="active"><a href="index.php">Home</a></li>
                              
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#">Welcome :<?php echo "$name";?></a></li>
         <li class="active"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

       </ul>
               </div>
       </nav>
       <div class='container'>
        <div class="text-center">
          <h2 class="text-success"> Your Application has been succesfully Submitted!!</h2>
        </div>
        <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
          <div class="text-center">
          <button type="submit" name="status" class="btn btn-primary">View Status</button>

        </div>
        <br>
       <br>
       <br>
         <?php 
           if(isset ( $_POST['status'])){
                $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
               if($conn){
                  $sql="select ApplicationId,Date as AppliedDate,Name,Email,Department as DepartmentPreffered,Research as AreaOfResearch,Programme,TestResult as WriitenTestResult,Status from userlogin where ApplicationId='$AppId' ";
                  $result=mysqli_query($conn,$sql);
                  echo "<table class='table table-hover'> <thead><tr>";

                  while($fieldinfo=mysqli_fetch_field($result)){
                    echo "<th> $fieldinfo->name </th>";
                  }
                  echo "<th>Action</th></tr></thead>";
                  while($row=mysqli_fetch_row($result)){
                  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td><a href=\"#\" onclick=\"window.open('view.php?value=$row[0]');\">View</a></td></tr>";
                  }
                  echo "</table>";
                  mysqli_close($conn);
                }}
                
            
       ?>
       
       </form>
       <div class='container'>
       <div class='Page-header'> <h3>Selection Procedure</h3></div>
       <p>1.There will be two levels in selection process.</p>
       <p>2.1st level: This is the basic level selection based on the applicant's qualifications and work experience.</p>
       <p>3.2nd level: In this level there will be a written test for those selected in the first level and candidates will be selected based on their performance in the test.</p>
       <p>4. Applicants can check their accounts to know their application status.</p>
       <p>5. Applicants can check the Institute website for the information about the test going to be held in the 2nd level.</p>

     </div></div>
      

   </body>
   </html>
   