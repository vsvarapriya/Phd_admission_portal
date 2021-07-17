<?php
$personalStatus="";
$Name=$aadhaar=$dob=$mobile=$gender=$category=$nation=$state=$marital=$dis="";
$nameerr=$aadhaarerr=$mobileerr=$generr=$caterr=$naterr=$stateerr=$maritalerr=$diserr=$doberr=$imgerr="";
$conn=new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
if($conn){
  $sql1="select * from personaldetails where ApplicationId='$AppId' ";
  $result=mysqli_query($conn,$sql1);
      if(mysqli_num_rows($result)>0){
        $personalStatus="Submitted Already!!!";

      }
      mysqli_close($conn);
  }
  if(empty($personalStatus)){
if(isset ( $_POST['personal'])){
	if(!empty($_POST['Name'])){
     $Name=$_POST['Name'];
 }
 else{
 	$nameerr="This field is required";
 }if(!empty($_POST['aadhaar'])){
     $aadhaar=$_POST['aadhaar'];
 }else{
 	$aadhaarerr="This field is required";
 }if(!empty($_POST['dob'])){ 
     $dob=$_POST['dob'];
     }else{
 	$doberr="This field is required";
 }if(!empty($_POST['mobile'])){
     $mobile=$_POST['mobile'];
      }else{
 	$mobileerr="This field is required";
 }if(!empty($_POST['gender'])){
     $gender=$_POST['gender'];
      }else{
 	$generr="This field is required";
 }if(!empty($_POST['category'])){
     $category=$_POST['category'];
      }else{
 	$caterr="This field is required";
 }if(!empty($_POST['nation'])){
     $nation=$_POST['nation'];
      }else{
 	$naterr="This field is required";
 }if(!empty($_POST['state'])){
     $state=$_POST['state'];
      }else{
 	$stateerr="This field is required";
 }if(!empty($_POST['marital'])){
     $marital=$_POST['marital'];
      }else{
 	$maritalerr="This field is required";
 }if(!empty($_POST['dis'])){
     $dis=$_POST['dis'];
      }else{
 	$diserr="This field is required";
 }
     $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
     if($conn){
     	if(!empty($_POST['Name']) && !empty($_POST['aadhaar']) &&  !empty($_POST['dob']) && !empty($_POST['gender']) && !empty($_POST['category']) && !empty($_POST['nation']) && !empty($_POST['state']) && !empty($_POST['marital']) && !empty($_POST['dis']) && !empty($_POST['mobile'])){
     	$sql="INSERT INTO `personaldetails`(`ApplicationId`, `Name`, `Aadhaar`, `DOB`, `Gender`, `Category`, `Nationality`, `State`, `MaritalStatus`, `Disability`, `MobileNo`, `personalStatus`) VALUES ('$AppId','$Name','$aadhaar','$dob','$gender','$category','$nation','$state','$marital','$dis','$mobile','Submitted')";
     	if(!mysqli_query($conn,$sql)){
            echo "Connection lost";
     	}
      else{
        $personalStatus="Submitted Succesfully!!";
      }
     	mysqli_close($conn);
     }}

$target_dir = "profilephoto/";
$file=$target_dir. basename( $_FILES["photo"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file = $target_dir . $AppId.".jpg";
$uploadOk = 1;
if(isset($_POST['personal'])) {
if(!empty($_FILES["photo"]["tmp_name"]))	{
  $check = getimagesize($_FILES["photo"]["tmp_name"]);

  if($check !== false) {
    
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
if ($_FILES["photo"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "PDF" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "sorry ur file not uploaded";

} else {
  if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
  
    echo "Sorry, there was an error uploading your photo";
  }
  
}
}else{
  	$imgerr="image is required";
  }

}}}
?>
