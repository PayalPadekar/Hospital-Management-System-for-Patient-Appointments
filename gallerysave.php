<?php
	require_once("../connection.php");
	foreach($_POST as $key => $value){
		${$key} = trim($value);
	}
	foreach($_FILES as $key => $value){
		if(!file_exists("galleryimage")){ mkdir("galleryimage", 0777, true); }
		$checkimage = $_FILES["$key"]["name"];
		$target_file = basename($checkimage);
		$post_tmp_img = $_FILES["$key"]["tmp_name"];
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		if($checkimage !=''){
			unlink(${$key."_old"});
			${$key}="galleryimage/".rand(1,1000).rand(1,1000).date("Y-m-d-H-i-s").".".$imageFileType;
			move_uploaded_file($post_tmp_img,${$key});
		}else{
			${$key}=${$key."_old"};
		}
		$imgdata=${$key};
	}
	mysqli_autocommit($con,FALSE);
	$sdfgvfdsghtr=0;
	$updatetime=date('Y-m-d:H:i:s');
	$insertdatetime=date('Y-m-d:H:i:s');
	if($crud == 'Save'){
		$sql="insert into   tblgallery ( logo,documentry, category, inserttime, updatetime) Values( '$logo','$documentry', '$category','$inserttime', '$updatetime')";
		mysqli_query($con,$sql);
		$returndata=mysqli_insert_id($con);
		if($returndata){
			$sdfgvfdsghtr=1;
		}else{
			$sdfgvfdsghtr=0;
		}
	}else if($crud =='Update'){
		$sql="update   tblgallery set logo='$logo',documentry='$documentry', category='$category', updatetime='$updatetime' where id='$id'";
		mysqli_query($con,$sql);
		$returndata = mysqli_affected_rows($con);
		if($returndata){
			$sdfgvfdsghtr=1;
		}else{
			$sdfgvfdsghtr=0;
		}
	}else if($crud =='Delete'){
		unlink($imgdata);
		$sql = "delete from  tblgallery where id='$id'";
		$returndata =mysqli_query($con,$sql);
		if($returndata){
			$sdfgvfdsghtr=1;
		}else{
			$sdfgvfdsghtr=0;
		}
	}
	if($sdfgvfdsghtr ==0){
		mysqli_rollback($con);
	}else{
		mysqli_commit($con);
	}
	echo $sdfgvfdsghtr;
?>