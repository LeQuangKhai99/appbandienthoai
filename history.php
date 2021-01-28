<?php
  include "connect.php";
   $iduser = $_POST['iduserr'];
     $mangtaikhoan =array();
    
     $query  = "SELECT * FROM Donhang where idtaikhoan=$iduser ORDER BY id DESC";
        
       $data = mysqli_query($con,$query);
        while ($row = mysqli_fetch_assoc($data)) {
  	array_push($mangtaikhoan, new Donhang(
                                        $row['id']
                                         ,$row['tenkhachhang']
                                         ,$row['sodienthoai']
                                         ,$row['email']
                                          ,$row['time']
                                        ));
  }
  echo json_encode($mangtaikhoan);
  class Donhang{
  	function Donhang($id,$tenkhachhang,$sodienthoai,$email,$time){
  	
  		$this->id = $id;
      $this->tenkhachhang = $tenkhachhang;
     $this->sodienthoai =$sodienthoai;
    	$this->time =$time;
     $this->email = $email;
  		
  	}
  }


?>
