<?php
  include "connect.php";
   $iduser = $_POST['hangdamua'];
     $mangtaikhoan =array();
    
     $query  = "SELECT * FROM Chitietdonhang Where madonhang=$iduser";
        
       $data = mysqli_query($con,$query);
        while ($row = mysqli_fetch_assoc($data)) {
  	array_push($mangtaikhoan, new Chitietdonhang(
                                        $row['tensanpham']
                                         ,$row['giasanpham']
                                         ,$row['soluongsanpham']
                                       
                                        ));
  }
  echo json_encode($mangtaikhoan);
  class Chitietdonhang{
  	function Chitietdonhang($tensanpham,$giasanpham,$soluongsanpham){
  	
  		$this->tensanpham = $tensanpham;
      $this->giasanpham = $giasanpham;
  
  		$this->soluongsanpham =$soluongsanpham;
    
  		
  	}
  }


?>
