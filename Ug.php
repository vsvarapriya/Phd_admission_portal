<?php
$UDegree=$UBranch=$Ucgpa=$Uclass=$Ucollege=$Upass="";
$UDerr=$UBerr=$Ucgperr=$Uclerr=$Ucolerr=$Uperr="";
$UgStatus=$ugcerterr="";
$conn=new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
if($conn){
  $sql1="select * from ug where ApplicationId='$AppId' ";
  $result=mysqli_query($conn,$sql1);
      if(mysqli_num_rows($result)>0){
        $UgStatus="Submitted Already!!!";

      }
      mysqli_close($conn);
  }
  if(empty($UgStatus)){
if(isset ( $_POST['Ug'])){
	if(!empty($_POST['UDegree'])){
     $UDegree=$_POST['UDegree'];
 }
 else{
 	$UDerr="This field is required";
 }
 if(!empty($_POST['UBranch'])){
     $UBranch=$_POST['UBranch'];
 }
 else{
 	$UBerr="This field is required";
 }

if(!empty($_POST['Ucgpa'])){
     $Ucgpa=$_POST['Ucgpa'];
 }
 else{
 	$Ucgperr="This field is required";
 }
if(!empty($_POST['Uclass'])){
     $Uclass=$_POST['Uclass'];
 }
 else{
 	$Uclerr="This field is required";
 }

if(!empty($_POST['Ucollege'])){
     $Ucollege=$_POST['Ucollege'];
 }
 else{
 	$Ucolerr="This field is required";
 }
 if(!empty($_POST['Upass'])){
     $Upass=$_POST['Upass'];
 }
 else{
 	$Uperr="This field is required";
 }
  $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
     if($conn){
     	if(!empty($UDegree) && !empty($UBranch)  && !empty($Ucgpa)  && !empty($Uclass)  && !empty($Ucollege)  && !empty($Upass)){
     $sql="INSERT INTO `ug`(`ApplicationId`, `Degree`, `Branch`, `cgpa`, `class`, `College`, `YearOfPassing`, `ugStatus`) VALUES('$AppId','$UDegree','$UBranch',

     '$Ucgpa','$Uclass','$Ucollege','$Upass','Submitted')";
     	if(!mysqli_query($conn,$sql)){
            echo "Connection lost";
     	}
      else{
        $UgStatus="Submitted Succesfully!!";
      }
  }
  }
  $target_dir = "Ug/";
$file=$target_dir. basename( $_FILES["ugcert"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file = $target_dir . $AppId.".jpg";
$uploadOk = 1;
if(isset($_POST['Ug'])) {
if(!empty($_FILES["ugcert"]["tmp_name"]))  {
  $check = getimagesize($_FILES["ugcert"]["tmp_name"]);

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
if ($_FILES["ugcert"]["size"] > 5000000) {
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
  if (!move_uploaded_file($_FILES["ugcert"]["tmp_name"], $target_file)) {
  
    echo "Sorry, there was an error uploading your photo";
  }
  
}
}else{
    $ugcerterr="image is required";
  }

}}}
?>