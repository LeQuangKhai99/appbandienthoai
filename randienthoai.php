<?php
	include "connect.php";

	$query = "SELECT DISTINCT * FROM Sanpham where Sanpham.idsanpham =1 ORDER BY rand(" . date("Ymd") .") LIMIT 4";
	$datadienthoai = mysqli_query($con,$query);
	$mangsanpham = array();

 while ($row = mysqli_fetch_assoc($datadienthoai)) {
  	array_push($mangsanpham, new Sanpham($row['id']
                                        ,$row['tensanpham']
                                        ,$row['giasanpham']
                                        ,$row['hinhanhsanpham']
                                        ,$row['motasanpham']
                                        ,$row['idsanpham']));
  }
  echo json_encode($mangsanpham);

  class Sanpham{
  	function Sanpham($id,$tensp,$giasp,$hinhanhsp,$motasp,$idsanpham){
  		$this->id = $id;
  		$this->tensp = $tensp;
  		$this->giasp =$giasp;
  		$this->hinhanhsp = $hinhanhsp;
  		$this->motasp = $motasp;
  		$this->idsanpham = $idsanpham;
  	}
  }
?>