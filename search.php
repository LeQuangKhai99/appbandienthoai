<?php
require "connect.php";
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
$mangsanpham = array();
if(isset($_POST['tukhoa'])){
$tukhoa =$_POST['tukhoa'];
$query= "SELECT * FROM Sanpham WHERE tensanpham LIKE '%$tukhoa%'";
$data = mysqli_query($con,$query);

 while ($row = mysqli_fetch_assoc($data)) {
  	array_push($mangsanpham, new Sanpham($row['id']
                                        ,$row['tensanpham']
                                        ,$row['giasanpham']
                                        ,$row['hinhanhsanpham']
                                        ,$row['motasanpham']
                                        ,$row['idsanpham']));
  }
  echo json_encode($mangsanpham);
  }

?>