<?php
  include "connect.php";
   $iduser = $_POST['iduser'];
     $mangtaikhoan =array();
    
     $query  = "SELECT * FROM user WHERE id = $iduser";
        
       $data = mysqli_query($con,$query);
        while ($row = mysqli_fetch_assoc($data)) {
  	array_push($mangtaikhoan, new user(
                                        $row['username']
                                        
                                        ,$row['sodienthoai']
                                        ));
  }
  echo json_encode($mangtaikhoan);
  class user{
  	function user($username,$sodienthoai){
  	
  		$this->username = $username;
  
  		$this->sodienthoai =$sodienthoai;
  		
  	}
  }


?>



