<?php
	
	include "connect.php";
	$tenkhachhang = $_POST['ten'];
	$password = $_POST['mk'];
	$sdt = $_POST['sdt'];

	if(strlen($tenkhachhang) >0 && strlen($sdt)>0 && strlen($password)>0){
		$sql = "SELECT * from user";
$result = mysqli_query($con, $sql);


function checkdangky($result, $con){
	$tenkhachhang = $_POST['ten'];
	$password = $_POST['mk'];
	$sdt = $_POST['sdt'];
    $tendangnhap = $tenkhachhang;
 
    if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    if ($tendangnhap == $row["username"] ) {
        return 'trung';
    }
  }
     $query = "INSERT INTO user(id,username,password,sodienthoai) VALUES (null,'$tenkhachhang','$password','$sdt')";
		if(mysqli_query($con,$query)){
			$iduser = $con->insert_id;
			return $iduser;
		}else{
			return "thatbai";
		}
	
    
	

    } else {
      return "0 results";
    }


}

echo checkdangky($result, $con);
 


  	}
?>