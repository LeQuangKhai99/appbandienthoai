<?php
	
	include "connect.php";
	$tenkhachhang = $_POST['tenkhachhang'];
	$sodienthoai = $_POST['sodienthoai'];
	$email = $_POST['email'];
	$idtaikhoan = $_POST['idtaikhoan'];
	$time = $_POST['time'];


	if(strlen($tenkhachhang) >0 && strlen($email)>0 && strlen($sodienthoai)>0){
	  
	  
		$query = "INSERT INTO Donhang(tenkhachhang,sodienthoai,email,idtaikhoan,time) VALUES ('$tenkhachhang','$sodienthoai','$email','$idtaikhoan','$time')";
		if(mysqli_query($con,$query)){
			$iddonhang = $con->insert_id;
			echo $iddonhang;
		}else{
			echo "thatbai";
		}
	}else{
		echo "Ban hay kiem tra du lieu";
	}


?>