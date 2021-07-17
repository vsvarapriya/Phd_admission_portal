<?php
$exam=$score=$rank="";
$examerr=$scoreerr=$rankerr="";
$OtherStatus=$testerr="";
$xy=0;
$conn=new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
if($conn){
	$sql1="select * from otherdetails where ApplicationId='$AppId' ";
	$result=mysqli_query($conn,$sql1);
     	if(mysqli_num_rows($result)>0){
     		$OtherStatus="Submitted Already!!!";

     	}
      mysqli_close($conn);
  }
  if(empty($OtherStatus)){
     if(isset ( $_POST['other'])){
  
	if(!empty($_POST['exam'])){
     $exam=$_POST['exam'];
 }
 else{
 	$examerr="This field is required";
 }
 
	if(!empty($_POST['score'])){
     $score=$_POST['score'];
 }
 else{
 	$scoreerr="This field is required";
 }
 if(!empty($_POST['rank'])){
     $rank=$_POST['rank'];
 }
 else{
     $rankerr="This field is required";
 }
   $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");
     if($conn){
     	if(!empty($rank) && !empty($score) &&  !empty($exam)){
     		$sql="INSERT INTO `otherdetails`(`ApplicationId`, `Exam`, `Score`, `Rank`, `OtherStatus`) VALUES ('$AppId','$exam','$score','$rank','Submitted')";
     	  if(!mysqli_query($conn,$sql)){
            echo "Connection lost";
     	   }
           else{
              $xy=1;
           }
        }
     }


$target_dir = "Test/";
$file=$target_dir. basename( $_FILES["test"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file = $target_dir . $AppId.".jpg";
$uploadOk = 1;
if(isset($_POST['other'])) {
if(!empty($_FILES["test"]["tmp_name"]))	{
  $check = getimagesize($_FILES["test"]["tmp_name"]);

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
if ($_FILES["test"]["size"] > 5000000) {
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
  if (!move_uploaded_file($_FILES["test"]["tmp_name"], $target_file)) {
    $uploadOk=0;
    echo "Sorry, there was an error uploading your photo";
  }
  
}
}else{
	
  	$testerr="file is required";
  }

}
if($xy==1 && $uploadOk==1){
	$OtherStatus="Submitted Successfully!!!";
}
}
     	
 }    	


?>