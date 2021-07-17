<?php
session_start();
$email ="";
 $password ="";
 $emailErr="";
 $passwordErr="";
 $LoginErr="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["email"])){
    $emailErr="This field is Required";
  }
  else{
     $email= test_input($_POST["email"]);
     $_SESSION['email']=$email;
    }
    if(empty($_POST["password"])){
      $passwordErr="This field is Required";
    }
    else{
    $password=test_input($_POST["password"]);
  }
  $conn = new mysqli( "localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
  if($conn){
     $sql="select * from adminlogin where Email='$email' and Password='$password'";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
           
           
               echo '<script>  window.location.href = "Admin.php" </script>' ;
      }
          
     
     else{
      $LoginErr= "Login details are not correct";
     }
  }
  else{
    echo "connection lost";
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
                 
                 <ul class="nav navbar-nav">
                 <li class="active"><a href="index.php">Home</a></li>
                               
                 </ul>
               </div>
       </nav>
  <div class="well">
      <div class="row">
           <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4" >
          <h3 class="page-header"> Login: </h3>
      </div>
  </div>
  
   
    <form  class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class='text-center'>
      <span class="error"><?php echo $LoginErr; ?></span></div>
      <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="email">Email Id:</label>
    <div class="col-xs-5"> 
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $emailErr </div>"; ?>
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="password">Password:</label>
    <div class="col-xs-5"> 
      <input type="password" class="form-control" name="password" placeholder="Enter Password">
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $passwordErr </div>"; ?>
    </div>
  </div>
          
 <div class="form-group">
    <div class="text-center">
      <button type="submit"  class="btn btn-primary">Submit</button>
    </div>

           </form>

       </div>
 </body>
 </html>