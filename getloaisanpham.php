<?php
	include "connect.php";

	$query = "SELECT * FROM Loaisanpham";

	$data = mysqli_query($con,$query);
	$mangloaisp = array();
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($mangloaisp, new Loaisp($row['id']
	                                      ,$row['tenloaisanpham']
	                                      ,$row['hinhanhloaisanpham']));

	}
	echo json_encode($mangloaisp);
	class Loaisp{
		function Loaisp($id,$tenloaisp,$hinhanhloaisp){
			$this->Id = $id;
			$this->Tenloaisp = $tenloaisp;
			$this->Hinhanhloaisp = $hinhanhloaisp;
		}
	}



?>