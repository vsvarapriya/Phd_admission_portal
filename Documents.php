<?php
$rperr=$incomeerr=$casteerr="";$x=$studyerr=$tentherr=$intererr="";
$upload=1;
$conn=new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd");



if($conn){
  $sql1="select * from documents where ApplicationId='$AppId' ";
  $result=mysqli_query($conn,$sql1);
      if(mysqli_num_rows($result)>0){
        $x="Submitted Already!!!";

      }
      mysqli_close($conn);
  }
  if(empty($x)){ 
if(isset($_POST['documents'])) {
$target_dir = "Research/";
$file=$target_dir. basename( $_FILES["Rp"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file = $target_dir . $AppId.".jpg";
$uploadOk1 = 1;
if(isset($_POST['documents'])) {
if(!empty($_FILES["Rp"]["tmp_name"])) {
  $check = getimagesize($_FILES["Rp"]["tmp_name"]);

  if($check !== false) {
    
    $uploadOk1 = 1;
  } else {
    
    echo "File is not an image.";
    $uploadOk1 = 0;
  }
  

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  
  $uploadOk1 = 0;
}
if ($_FILES["Rp"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
 
  $uploadOk1 = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "PDF" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";

  $uploadOk1 = 0;
}
if ($uploadOk1 == 0) {
  echo "sorry ur file not uploaded";
  $upload=0;

}
}else{
	$upload=0;
  	$rperr="file is required";
  }

}
  
$target_dir2 = "Income/";
$file=$target_dir2. basename( $_FILES["Income"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file2 = $target_dir2 . $AppId.".jpg";
$uploadOk2 = 1;
if(isset($_POST['documents'])) {
if(!empty($_FILES["Income"]["tmp_name"]))	{
  $check = getimagesize($_FILES["Income"]["tmp_name"]);

  if($check !== false) {
    
    $uploadOk2 = 1;
  } else {
    echo "File is not an image.";
    $uploadOk2 = 0;
  }
  

if (file_exists($target_file2)) {
  echo "Sorry, file already exists.";
  $uploadOk2 = 0;
}
if ($_FILES["Income"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk2 = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "PDF" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk2 = 0;
}
if ($uploadOk2 == 0) {
	$upload=0;
  echo "sorry ur file not uploaded";

} 
}else{
	$upload=0;
  	$incomeerr="file is required";
  }

}


$target_dir3 = "Caste/";
$file=$target_dir3. basename( $_FILES["Rp"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file3 = $target_dir3 . $AppId.".jpg";
$uploadOk3 = 1;
if(isset($_POST['documents'])) {
if(!empty($_FILES["Caste"]["tmp_name"]))	{
  $check = getimagesize($_FILES["Caste"]["tmp_name"]);

  if($check !== false) {
    
    $uploadOk3 = 1;
  } else {
    echo "File is not an image.";
    $uploadOk3 = 0;
  }
  

if (file_exists($target_file3)) {
  echo "Sorry, file already exists.";
  $uploadOk3 = 0;
}
if ($_FILES["Caste"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk3 = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "PDF" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk3 = 0;
}
if ($uploadOk3 == 0) {
	$upload=0;
  echo "sorry ur file not uploaded";

} 
}else{
	$upload=0;
  	$casteerr ="file is required";
  }

}




$target_dir5 = "Study/";
$file=$target_dir5. basename( $_FILES["Study"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file5 = $target_dir5 . $AppId.".jpg";
$uploadOk5 = 1;
if(isset($_POST['documents'])) {
if(!empty($_FILES["Study"]["tmp_name"]))  {
  $check = getimagesize($_FILES["Study"]["tmp_name"]);

  if($check !== false) {
    
    $uploadOk5 = 1;
  } else {
    echo "File is not an image.";
    $uploadOk5= 0;
  }
  

if (file_exists($target_file3)) {
  echo "Sorry, file already exists.";
  $uploadOk5 = 0;
}
if ($_FILES["Study"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk5 = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "PDF" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk5 = 0;
}
if ($uploadOk5 == 0) {
  $upload=0;
  echo "sorry ur file not uploaded";

} 
}else{
  $upload=0;
    $studyerr ="file is required";
  }

}


$target_dir6 = "Tenth/";
$file=$target_dir6. basename( $_FILES["Tenth"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file6 = $target_dir6 . $AppId.".jpg";
$uploadOk6 = 1;
if(isset($_POST['documents'])) {
if(!empty($_FILES["Tenth"]["tmp_name"]))  {
  $check = getimagesize($_FILES["Tenth"]["tmp_name"]);

  if($check !== false) {
    
    $uploadOk6 = 1;
  } else {
    echo "File is not an image.";
    $uploadOk6 = 0;
  }
  

if (file_exists($target_file3)) {
  echo "Sorry, file already exists.";
  $uploadOk6 = 0;
}
if ($_FILES["Study"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk6 = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "PDF" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk6 = 0;
}
if ($uploadOk6 == 0) {
  $upload=0;
  echo "sorry ur file not uploaded";

} 
}else{
  $upload=0;
    $tentherr ="file is required";
  }

}

$target_dir7 = "Inter/";
$file=$target_dir7. basename( $_FILES["Inter"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file7 = $target_dir7 . $AppId.".jpg";
$uploadOk7 = 1;
if(isset($_POST['documents'])) {
if(!empty($_FILES["Inter"]["tmp_name"]))  {
  $check = getimagesize($_FILES["Inter"]["tmp_name"]);

  if($check !== false) {
    
    $uploadOk7 = 1;
  } else {
    echo "File is not an image.";
    $uploadOk7 = 0;
  }
  

if (file_exists($target_file3)) {
  echo "Sorry, file already exists.";
  $uploadOk7 = 0;
}
if ($_FILES["Study"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk7 = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "PDF" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk7 = 0;
}
if ($uploadOk7 == 0) {
  $upload=0;
  echo "sorry ur file not uploaded";

} 
}else{
  $upload=0;
    $intererr ="file is required";
  }

}



if($upload==1 && $uploadOk1==1 && $uploadOk2==1 && $uploadOk3==1 && $uploadOk5==1 && $uploadOk6==1 && $uploadOk7==1){
  $a=move_uploaded_file($_FILES["Rp"]["tmp_name"], $target_file);
  $b=move_uploaded_file($_FILES["Income"]["tmp_name"], $target_file2);
  $c=move_uploaded_file($_FILES["Caste"]["tmp_name"], $target_file3);
  
  $e=move_uploaded_file($_FILES["Study"]["tmp_name"], $target_file5);
  $f=move_uploaded_file($_FILES["Tenth"]["tmp_name"], $target_file6);
  $g=move_uploaded_file($_FILES["Inter"]["tmp_name"], $target_file7); 
  if($a && $b && $c && $e && $f && $g){
    $upload=1;
  }
  else{
    $upload=0;
    echo "Sorry, there was an error uploading your file.";
  }
}

$target_dir4 = "PWD/";
$file=$target_dir4. basename( $_FILES["PWD"]["name"]);
$imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$target_file4 = $target_dir4 . $AppId.".jpg";
$uploadOk4 = 1;
if(isset($_POST['documents'])) {
if(!empty($_FILES["PWD"]["tmp_name"]))  {
  $check = getimagesize($_FILES["PWD"]["tmp_name"]);

  if($check !== false) {
    
    $uploadOk4 = 1;
  } else {
    echo "File is not an image.";
    $uploadOk4 = 0;
  }
  

if (file_exists($target_file3)) {
  echo "Sorry, file already exists.";
  $uploadOk4 = 0;
}
if ($_FILES["PWD"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk4 = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "PDF" ) {
  echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
  $uploadOk4 = 0;
}
if ($uploadOk4 == 0) {
  $upload=0;
  echo "sorry ur file not uploaded";

} else {
  if (!move_uploaded_file($_FILES["PWD"]["tmp_name"], $target_file4)) {
    $upload=0;
    echo "Sorry, there was an error uploading your file";
  }
  
}
}

}




if($upload==1){
    $conn= new mysqli("localhost","id13683540_root","mFk3Y(b|nRSzy)aZ","id13683540_phd" );
     if($conn){
      $sql1="INSERT INTO `documents`(`ApplicationId`, `DocStatus`) VALUES ('$AppId','Submitted')";
      if(!mysqli_query($conn,$sql1)){
         echo "connection lost! Try Again Later";
      }
    }
      
      
  	$x="Submitted Successfully!!!";
  }
  }}
  
?>
