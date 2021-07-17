<?php
$suberr="";
if(isset($_POST['submit'])){
	if(isset($_POST['agree'])){
	if(!empty($workStatus) && !empty($personalStatus) && !empty($UgStatus) && !empty($PgStatus) && !empty($OtherStatus) && !empty($x)){
			$conn= new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
     if($conn){
     	$sql1="UPDATE `userlogin` SET `Status` = 'Pending' WHERE `userlogin`.`ApplicationId` = '$AppId'";
     	if(mysqli_query($conn,$sql1)){

     		 echo '<script>  window.location.href = "logout.php" </script>' ;
     	}
     	else{
     		echo "connection lost! Try again later";
     	}
     }
	}
	}else{
		$suberr="Declaration box must be checked";
	}
}
?>