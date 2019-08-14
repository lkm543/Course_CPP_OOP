<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
if ($_FILES["fileToUpload"]["error"] > 0){
	echo "Error: " . $_FILES["fileToUpload"]["error"];
}else{
	session_start();
	$Name=$_POST['name'];
	$Comment=$_POST['comment'];
	$UploadDate=date('Y-m-d H:i:s');
	if (!empty($_SERVER["HTTP_CLIENT_IP"])){
	    $ip = $_SERVER["HTTP_CLIENT_IP"];
	}elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
	    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	}else{
	    $ip = $_SERVER["REMOTE_ADDR"];
	}
	     
    $_SESSION['Filename']=$_FILES["fileToUpload"]["name"];
	$_SESSION['FileType']=$_FILES["fileToUpload"]["type"];
	$_SESSION['FileSize']=($_FILES["fileToUpload"]["size"] / 1024)." Kb";	


	$newfilename = time() . '_' . rand(100, 999) . '.' . end(explode(".",$_FILES["fileToUpload"]["name"]));

	if(!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"Upload/".$_POST['HW']."/".$newfilename)){
		echo "Error";
	}

	include 'dbinfo.php';

	try {

	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	    $sql="INSERT INTO ".$_POST['HW']." (Name , FileName , Comment , UploadDate , IP) VALUES ('$Name','$newfilename','$Comment','$UploadDate','$ip')";
	    // use exec() because no results are returned
	    $conn->exec($sql);
		$_SESSION['Uploaded']='True';
		header("Location: ../Cpp_OOP/#Homework");
		die();
    }
	catch(PDOException $e)
    {
		$_SESSION['Uploaded']='Error';
		echo 'Connect error:'.$e;
		die();
    }

	$conn = null;
	
}
	//echo "Upload/".$_POST['HW']."/".$newfilename;
?>