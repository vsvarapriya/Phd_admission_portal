<?php
$insti=$position=$start=$end="";
$instierr=$positionerr=$froerr=$toerr="";
$workStatus="";
$workerr="";
$conn=new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
     if($conn){
         $sql="select status from workexperience where ApplicationId='$AppId'";
         $result=mysqli_query($conn,$sql);
         $row=mysqli_fetch_row($result);
         if($row[0]=='submitted'){
             $workStatus="submitted";
         }
     }

     	if(empty($workStatus)){
if(isset ( $_POST['wsave'])){
	if(!empty($_POST['insti'])){
     $insti=$_POST['insti'];
 }
 else{
 	$instierr="This field is required";
 }
 if(!empty($_POST['position'])){
     $position=$_POST['position'];
 }
 else{
 	$positionerr="This field is required";
 }

if(!empty($_POST['fro'])){
     $start=$_POST['fro'];
 }
 else{
 	$froerr="This field is required";
 }
 if(!empty($_POST['to'])){
     $end=$_POST['to'];
 }
 else{
     $tooerr="This field is required";
 }
  $conn = new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
     if($conn){
     	if(!empty($start) && !empty($position)  && !empty($insti) ){
     		$sql="INSERT INTO `workexperience`(`ApplicationId`, `Institute`, `Position`, `StartDate`, `EndDate`,`status`) VALUES ('$AppId','$insti','$position','$start','$end','saved')";
     		if(!mysqli_query($conn,$sql)){
            echo "Connection lost";
     	    }
           mysqli_close($conn);
     	}
     }
}
if(isset($_POST['wsubmit'])){
	$conn= new mysqli( "localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
     if($conn){
     	$sql1="select * from workexperience where ApplicationId='$AppId'";
     	$result=mysqli_query($conn,$sql1);
     	if(mysqli_num_rows($result)>0){
     	    $sql2="UPDATE `workexperience` SET `status`='submitted' where ApplicationId='$AppId'";
     	    if(mysqli_query($conn,$sql2)){
     		$workStatus=" Submitted Succesfully!!!";}
     	}
     	else{
     		$workerr="Follow the instructions given";
     	}
     }
}
}
?>