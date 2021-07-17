<?php
$PDegree=$PBranch=$Pcgpa=$Pclass=$Pcollege=$Ppass="";
$PDerr=$PBerr=$Pcgperr=$Pclerr=$Pcolerr=$Pperr="";
$PgStatus=$pgcerterr="";
$conn=new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
if($conn){
  $sql1="select * from pg where ApplicationId='$AppId' ";
  $result=mysqli_query($conn,$sql1);
      if(mysqli_num_rows($result)>0){
        $PgStatus="Submitted Already!!!";

      }
      mysqli_close($conn);
  }
  if(empty($PgStatus)){
if(isset ( $_POST['pg'])){
	if(!empty($_POST['PDegree'])){
     $PDegree=$_POST['PDegree'];
 }
 else{
 	$PDerr="This field is required";
 }
 if(!empty($_POST['PBranch'])){
     $PBranch=$_POST['PBranch'];
 }
 else{
 	$PBerr="This field is required";
 }

if(!empty($_POST['Pcgpa'])){
     $Pcgpa=$_POST['Pcgpa'];
 }
 else{
 	$Pcgperr="This field is required";
 }
if(!empty($_POST['Pclass'])){
     $Pclass=$_POST['Pclass'];
 }
 else{
 	$Pclerr="This field is required";
 }

if(!empty($_POST['Pcollege'])){
     $Pcollege=$_POST['Pcollege'];
 }
 else{
 	$Pcolerr="This field is required";
 }
 if(!empty($_POST['Ppass'])){
     $Ppass=$_POST['Ppass'];
 }
 else{
 	$Pperr="This field is required";
 }
  $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
     if($conn){
        if(!empty($PDegree) && !empty($PBranch)  && !empty($Pcgpa)  && !empty($Pclass)  && !empty($Pcollege)  && !empty($Ppass)){
     $sql="INSERT INTO `pg`(`ApplicationId`, `Degree`, `Branch`, `cgpa`, `class`, `College`, `YearOfPassing`, `pgStatus`) VALUES('$AppId','$PDegree','$PBranch',

     '$Pcgpa','$Pclass','$Pcollege','$Ppass','Submitted')";
     	if(!mysqli_query($conn,$sql)){
            echo "Connection lost";
     	}
      else{
        $PgStatus="Submitted Succesfully!!";
      }
  }}
    $target_dir = "Pg/";
$file=$target_dir. basename( $_FILES["pgcert"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file = $target_dir . $AppId.".jpg";
$uploadOk = 1;
if(isset($_POST['pg'])) {
if(!empty($_FILES["pgcert"]["tmp_name"]))  {
  $check = getimagesize($_FILES["pgcert"]["tmp_name"]);

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
if ($_FILES["pgcert"]["size"] > 5000000) {
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
  if (!move_uploaded_file($_FILES["pgcert"]["tmp_name"], $target_file)) {
  
    echo "Sorry, there was an error uploading your photo";
  }
  
}
}else{
    $pgcerterr="image is required";
  }

}}}

?>
