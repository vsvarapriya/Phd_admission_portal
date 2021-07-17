<?php
$date=date("Y/m/d");
 $email ="";
 $password ="";
 $emailErr="";
 $passwordErr="";
 $RegError="";
 $Name="";
 $NameErr=$DpErr=$Dp=$Ar=$ArErr=$ApcatErr=$Apcat="";
 $AppId="NIT_AP_2020_";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["email"])){
    $emailErr="This field is Required";
  }
  else{
     $email= test_input($_POST["email"]);
    }
    if(empty($_POST["Name"])){
    $NameErr="This field is Required";
  }
  else{
     $Name= test_input($_POST["Name"]);
    }
    if(empty($_POST["Dp1"])){
    $DpErr="This field is Required";
  }
  else{
     $Dp= test_input($_POST["Dp1"]);
    }
    if(empty($_POST["Ar"])){
    $ArErr="This field is Required";
  }
  else{
     $Ar= test_input($_POST["Ar"]);
    }
    if(empty($_POST["Apcat"])){
    $ApcatErr="This field is Required";
  }
  else{
     $Apcat = test_input($_POST["Apcat"]);
    }
    if(empty($_POST["password"])){
      $passwordErr="This field is Required";
    }
    else{
    $password=test_input($_POST["password"]);
  }
  $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
  if($conn){
    $result=mysqli_query($conn,"SELECT COUNT(ApplicationId) FROM userlogin");
    $count=mysqli_fetch_row($result);
    $res=$count[0]+1;
    $AppId=$AppId.$res;
    if(!empty($email) && !empty($password) && !empty($Name)  && !empty($Dp)  && !empty($Ar)  && !empty($Apcat)){
        $sql="INSERT INTO `userlogin`(`ApplicationId`, `Date`, `Name`, `Email`, `Department`, `Research`, `Programme`, `Password`, `Status`, `TestResult`)  VALUES ('$AppId',
        '$date','$Name','$email','$Dp','$Ar','$Apcat','$password','Not Submitted','')";
        if(mysqli_query($conn,$sql)){
          echo '<script>  window.location.href = "index.php" </script>' ;
          echo "Registered Succesfully";
        }

        else{
          $RegError="This email is already registered";
        }
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
         <img src="mhrd-logo.jpg" alt="mhrd-logo" class="img_circle" style="width: 80%"></a>
      </div>
        </div>
  </div>
    <nav class="navbar navbar-inverse">
                 <div class="container-fluid">
                 
                 <ul class="nav navbar-nav">
                 <li class="active"><a href="index.php">Home</a></li>
                 <li class="active"><a href="instructions.php">Instructions</a></li>
                
                 </ul>
               </div>
       </nav>
  <div class="well">
      <div class="row">
           <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4" >
          <h3 class="page-header"> Register </h3>
      </div>
  </div>
  
   
    <form  class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <span class="error"><?php echo $RegError; ?></span>
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
    <label class="control-label col-xs-offset-2 col-xs-2" for="Name">Name:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Name" placeholder="Enter Name">
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $NameErr </div>"; ?>
    </div>
  </div>
           <div class="form-group">
    <label class="control-label col-xs-offset-1 col-xs-3" for="Dp1" >DepartmentPreference:</label> 
    <div class="col-xs-5">
        <select name = "Dp1"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --please select--     </option>
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
  <div class="col-xs-3 ">

    <?php echo "<div class='error'> $DpErr </div>"; ?>
  </div>
  </div>
   <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Ar">Area of Research:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Ar" placeholder="Enter Area of Research">
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $ArErr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Apcat" >Application Category:</label> 
    <div class="col-xs-5">
        <select name = "Apcat"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --Choose Category-- </option> 
        <option style="color: blue;" value="none"  disabled > <strong> Part Time :</strong> </option> 

        <option value="On Campus">On Campus</option>
        <option value="External">External</option>
        <option style="color: blue;" value="none"  disabled > <strong> Full Time :</strong> </option> 
        <option value="Stipendary">Stipendary</option>
        <option value="Non Stipendary">Non Stipendary </option>
        <option value="Project">Project</option>
        <option value="Other Fellowships">Other Fellowships</option>
      </select>
  </div>
  <div class="col-xs-3 ">
    <?php echo "<div class='error'>$ApcatErr  </div>"; ?>
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

  </div>
        <div class="form-group">
    <div class="text-center">   
           <a href="login.php" >Already Registered? Login here</a>
         </div>
       </div>
           
           </form>
          
        </div>
</body>
</html>