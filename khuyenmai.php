<?php
  include "connect.php";
   $mangkhuyenmai =array();
  $query  = "SELECT * FROM khuyenmai WHERE id ";
  $data = mysqli_query($con,$query);
  while ($row = mysqli_fetch_assoc($data)) {
  	array_push($mangkhuyenmai, new khuyenmai($row['id']
                                        ,$row['tenkhuyenmai']
                                        ,$row['hinhanhkhuyenmai']
                                        ,$row['noidung']
                                        ));
  }
  echo json_encode($mangkhuyenmai);

  class khuyenmai{
  	function khuyenmai($id,$tenkhuyenmai,$hinhanhkhuyenmai,$noidung){
  		$this->id = $id;
  		$this->tenkhuyenmai = $tenkhuyenmai;
  		$this->hinhanhkhuyenmai =$hinhanhkhuyenmai;
  		$this->noidung = $noidung;
  		
  	}
  }
?>