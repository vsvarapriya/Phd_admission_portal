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
 <?php include  'personal.php' ?>
 <?php include  'Documents.php' ?>
  <?php include  'Ug.php' ?>
   <?php include  'Pg.php' ?>
   <?php include  'other.php' ?>
   <?php include 'work.php' ?>
   <?php include 'submit.php' ?>
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
	
	 	<div class="container" >
	 		<?php echo"<div class='text-center' style='color:black; font-size:22px;'>
       	         <div class='row'>
    	  <div class='col-xs-offset-4 col-xs-4 col-xs-offset-4'>
    		   <div class='page-header'>Your Application Id: $AppId
    		   </div>
    		</div>
    	</div>
    	</div>" ?>

    <div class="well">
    	
       <div class='text-center' style='color:black; font-size:22px;'>
       	<div class="row">
    	  <div class='col-xs-offset-4 col-xs-4 col-xs-offset-4'>
    		   <div class="page-header">
    			    Personal Details
    		   </div>
    	  </div>
    	</div>
       </div>
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Name">Name:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Name" placeholder="Enter Full Name">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $nameerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="aadhaar">Aadhaar No:</label>
    <div class="col-xs-5"> 
      <input type="text" class="form-control" name="aadhaar" placeholder="Enter Aadhaar Number">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $aadhaarerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="dob">Date Of Birth:</label>
    <div class="col-xs-5"> 
      <input type="Date" class="form-control" name="dob" placeholder="Enter Date Of Birth">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $doberr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="mobile">Mobile No:</label>
    <div class="col-xs-5"> 
      <input type="tel" class="form-control" name="mobile" placeholder="Enter Mobile No">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $mobileerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="gender" >Gender:</label> 
    <div class="col-xs-5">
        <select name = "gender"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --please select--     </option>
       <option value="Male">Male</option>
        <option value="Female">Female</option> 
      </select>
    </div>
  <div class="col-xs-3 ">
  	<?php echo "<div class='error'> $generr </div>"; ?>
  </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="category" >Category:</label> 
    <div class="col-xs-5">
        <select name = "category"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --please select--  </option> 
        <option value="General">General</option>
        <option value="OBC">Other Backward Classes(OBC)</option>
        <option value="SC">Scheduled Caste(SC)</option>
        <option value="ST">Scheduled Tribe(ST)</option>
      </select>
  </div>
  <div class="col-xs-3 ">
  	<?php echo "<div class='error'> $caterr </div>"; ?>
  </div>
  </div>
   <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="nation" >Nationality:</label> 
    <div class="col-xs-5">
        <select name = "nation"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --please select--     </option>
       <option value="Male">India</option>
       
      </select>
    </div>
  <div class="col-xs-3 ">
  	<?php echo "<div class='error'> $naterr </div>"; ?>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="state">State:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="state" placeholder="Enter your State">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $stateerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="marital" >Marital Status:</label> 
    <div class="col-xs-5">
        <select name = "marital"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --please select--     </option>
       <option value="Single">Single</option>
        <option value="Married">Married</option> 
      </select>
    </div>
  <div class="col-xs-3 ">
  	   <?php echo "<div class='error'> $maritalerr </div>"; ?>
  </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="dis" >Person with Disability:</label> 
    <div class="col-xs-5">
        <select  name = "dis"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --please select--     </option>
       <option value="Yes">Yes</option>
        <option value="No">No</option> 
      </select>
    </div>

  <div class="col-3 ">
  	<?php echo "<div class='error'> $diserr </div>"; ?>
  </div>
</div>

  
   <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="photo">Upload Passport size photo:</label>
    <div class="col-xs-5"> 
      <input type="file" class="form-control" name="photo" >
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $imgerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-5 col-xs-7">
      <button type="submit" name="personal" class="btn btn-primary">Submit</button>
    </div>

  </div>
 <?php echo "<div class='text-center'><div class='text-success'> $personalStatus</div> </div>"; ?>
</form>
</div>
</div>


<div class="container">
<div class="well">
    	
       <div class='text-center' style='color:black; font-size:22px;'>
       	<div class="row">
    	  <div class='col-xs-offset-4 col-xs-4 col-xs-offset-4'>
    		   <div class="page-header">
    			    Documents
    		   </div>
    	  </div>
    	</div>
       </div>
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
    	<div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="Rp">Research Proposal:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="Rp" >
        </div>
       <div class="col-xs-3 ">
    	  <?php echo "<div class='error'>$rperr </div>"; ?>
       </div>
  </div>
  <div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="Caste">Category Proof:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="Caste" >
        </div>
       <div class="col-xs-3 ">
    	  <?php echo "<div class='error'>$casteerr </div>"; ?>
       </div>
  </div>
   <div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="Income">Income Proof:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="Income" >
        </div>
       <div class="col-xs-3 ">
    	  <?php echo "<div class='error'>$incomeerr </div>"; ?>
       </div>
  </div>
 
  <div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="Study">Study Certificate:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="Study" >
        </div>
       <div class="col-xs-3 ">
        <?php echo "<div class='error'>$studyerr </div>"; ?>
       </div>
  </div>
   <div class="form-group">
          <label class="control-label col-xs-offset-1 col-xs-3" for="Tenth">10th Class Marks Sheet:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="Tenth" >
        </div>
       <div class="col-xs-3 ">
        <?php echo "<div class='error'>$tentherr </div>"; ?>
       </div>
  </div>
   <div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="Inter">Inter Marks Sheet:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="Inter" >
        </div>
       <div class="col-xs-3 ">
        <?php echo "<div class='error'>$intererr </div>"; ?>
       </div>
  </div>
  <div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="PWD">PWD certificate:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="PWD" >
        </div>
       <div class="col-xs-3 ">
        <?php echo "<h4>(if Applicable) </h4>"; ?>
       </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-5 col-xs-7">
      <button type="submit" name="documents" class="btn btn-primary">Submit</button>
    </div>

  </div>
  <?php echo "<div class='text-center'><div class='text-success'> $x </div> </div>"; ?>
  </form>
  </div>
</div>
<div class="container">
<div class="well">
    	
       <div class='text-center' style='color:black; font-size:22px;'>
       	<div class="row">
    	  <div class='col-xs-offset-4 col-xs-4 col-xs-offset-4'>
    		   <div class="page-header">
    			    Under Graduation Details
    		   </div>
    	  </div>
    	</div>
       </div>
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
    	<div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="UDegree">Name of Degree:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="UDegree" placeholder="Name of Degree">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $UDerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="UBranch">Branch Name:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="UBranch" placeholder="Branch/Specialisation">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $UBerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Ucgpa">C.G.P.A:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Ucgpa" placeholder="Enter C.G.P.A">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $Ucgperr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Uclass" >Class:</label> 
    <div class="col-xs-5">
        <select name = "Uclass"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --please select--     </option>
       <option value="Honours">Honours</option>
       <option value="Distinction">Distinction</option>
        <option value="First">First</option> 
        <option value="Second">Second</option>
      </select>
    </div>
  <div class="col-xs-3 ">
  	   <?php echo "<div class='error'> $Uclerr </div>"; ?>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Ucollege">College Name:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Ucollege" placeholder="College Name">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $Ucolerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Upass">Year Of Passing:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Upass" placeholder="Year of Passing">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $Uperr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="ugcert"> Certificate:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="ugcert" >
        </div>
       <div class="col-xs-3 ">
        <?php echo "<div class='error'> $ugcerterr </div>"; ?>
       </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-5 col-xs-7">
      <button type="submit" name="Ug" class="btn btn-primary">Submit</button>
    </div>

  </div>
   <?php echo "<div class='text-center'><div class='text-success'> $UgStatus</div> </div>"; ?>
    </form>
</div>
</div>
<div class="container">
<div class="well">
    	
       <div class='text-center' style='color:black; font-size:22px;'>
       	<div class="row">
    	  <div class='col-xs-offset-4 col-xs-4 col-xs-offset-4'>
    		   <div class="page-header">
    			    Post Graduation Details
    		   </div>
    	  </div>
    	</div>
       </div>
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
    	<div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="PDegree">Name of Degree:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="PDegree" placeholder="Name of Degree">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $PDerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="PBranch">Branch Name:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="PBranch" placeholder="Branch/Specialisation">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $PBerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Pcgpa">C.G.P.A:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Pcgpa" placeholder="Enter C.G.P.A">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $Pcgperr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Pclass" >Class:</label> 
    <div class="col-xs-5">
        <select name = "Pclass"  class="form-control dropdown">
        <option value="none" selected disabled hidden> --please select--     </option>
       <option value="Honours">Honours</option>
       <option value="Distinction">Distinction</option>
        <option value="First">First</option> 
        <option value="Second">Second</option>
      </select>
    </div>
  <div class="col-xs-3 ">
  	   <?php echo "<div class='error'> $Pclerr </div>"; ?>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Pcollege">College Name:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Pcollege" placeholder="College Name">
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $Pcolerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="Ppass">Year Of Passing:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="Ppass" placeholder="Year of Passing">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $Pperr </div>"; ?>
    </div>
  </div>
   <div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="pgcert"> Certificate:</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="pgcert" >
        </div>
       <div class="col-xs-3 ">
        <?php echo "<div class='error'> $pgcerterr </div>"; ?>
       </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-5 col-xs-7">
      <button type="submit" name="pg" class="btn btn-primary">Submit</button>
    </div>

  </div>
  <?php echo "<div class='text-center'><div class='text-success'> $PgStatus</div> </div>"; ?>
    </form>
</div>
</div>
<div class="container">
<div class="well">
    	
       <div class='text-center' style='color:black; font-size:22px;'>
       	<div class="row">
    	  <div class='col-xs-offset-4 col-xs-4 col-xs-offset-4'>
    		   <div class="page-header">
    			    Other Details
    		   </div>
    	  </div>
    	</div>
       </div>
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
    <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="exam" >Examination:</label> 
    <div class="col-xs-5">
        <select name = "exam"  class="form-control dropdown">
        
       <option value="GATE" selected>GATE</option>
      
 

      </select>
    </div>
  <div class="col-xs-3 ">
  	   <?php echo "<div class='error'> $examerr </div>"; ?>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="score">ENTER SCORE:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="score" placeholder="Enter Score">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $scoreerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="rank">ENTER RANK:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="rank" placeholder="Enter Rank">
    </div>
    <div class="col-xs-3 ">
    	<?php echo "<div class='error'> $rankerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
          <label class="control-label col-xs-offset-2 col-xs-2" for="test">Test Certificate</label>
          <div class="col-xs-5"> 
          <input type="file" class="form-control" name="test" >
        </div>
       <div class="col-xs-3 ">
    	  <?php echo "<div class='error'>$testerr </div>"; ?>
       </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-5 col-xs-7">
      <button type="submit" name="other" class="btn btn-primary">Submit</button>
    </div>

  </div>
   <?php echo "<div class='text-center'><div class='text-success'> $OtherStatus</div> </div>"; ?>
    </form>
</div>
</div>
<div class="container">
<div class="well">
    	
       <div class='text-center' style='color:black; font-size:22px;'>
       	<div class="row">
    	  <div class='col-xs-offset-4 col-xs-4 col-xs-offset-4'>
    		   <div class="page-header">
    			    Work Experience
    		   </div>
    	  </div>
    	</div>
       </div>
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
      <div class="row">
        <div class="col-xs-offset-3 col-xs-9 " style="color: blue">
       <p> 1.you can save your workExperience any no of times by filling the required fields using Save Button.</p>
     </div>
   </div>
    <div class="row">
        <div class="col-xs-offset-3 col-xs-9" style="color: blue">
       <p> 2.After completion you can click Submit Button.</p>
     </div>
   </div>
    <div class="row">
        <div class="col-xs-offset-3 col-xs-9" style="color: blue">
        <p>3.In case of No Past Experience you can fill NA in all the fields and then click Save and Submit.</p>
      </div>

      </div>
        <div class="form-group">
    <label class="control-label col-xs-offset-1 col-xs-3" for="insti"> Name of Institute/Company:</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="insti" placeholder="Enter Institute/Company Name">
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $instierr  </div>"; ?>
    </div>
  </div>
    	    <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="position"> Position Held :</label>
    <div class="col-xs-5"> 
      <input type="name" class="form-control" name="position" placeholder="Enter Position">
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $positionerr  </div>"; ?>
    </div>
  </div> 
   <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="fro">From:</label>
    <div class="col-xs-5"> 
      <input type="Date" class="form-control" name="fro" >
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $froerr </div>"; ?>
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-xs-offset-2 col-xs-2" for="to">To:</label>
    <div class="col-xs-5"> 
      <input type="Date" class="form-control" name="to" >
    </div>
    <div class="col-xs-3 ">
      <?php echo "<div class='error'> $toerr </div>"; ?>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-5 col-xs-7">
      <button type="submit" name="wsave" class="btn btn-primary">Save</button>
    </div>

  </div>
  <div class="form-group">
    <div class="col-xs-offset-5 col-xs-7">
      <button type="submit" name="wsubmit" class="btn btn-primary">Submit</button>
    </div>

  </div>
  <?php echo "<div class='text-center'><div class='text-success'> $workStatus</div> </div>"; ?>
     <?php echo "<div class='text-center'><div class='error'> $workerr</div> </div>"; ?>
    </form>
</div>
</div>
<div class="container">
<div class="well">
    	
       <div class='text-center' style='color:black; font-size:22px;'>
       	<div class="row">
    	  <div class='col-xs-offset-4 col-xs-4 col-xs-offset-4'>
    		   <div class="page-header">
    			    SUBMISSION
    		   </div>
    	  </div>
    	</div>
       </div>
    <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
    	<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" name="agree" class="form-check-input" value="">I do hereby declare that the information furnished in this application are true and correct to the best of my knowledge. If, any of the particulars furnished above is found to be incorrect at the time of admission, the admission may be cancelled.
  </label>
</div>
  <?php echo "<div class='text-center'><div class='error'> $suberr</div> </div>"; ?>
 <div class="form-group">
    <div class="col-xs-offset-5 col-xs-7">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>

  </div>
    </form>
</div>
</div>
</body>
</html>
