<?php
 include "connect.php";

 $cate = $_GET['cate_id'];
if($cate == 'all'){
    $cate = 'cate.id';
}
$sql = "SELECT sp.*, cate.tenloaisanpham from sanpham as sp
JOIN loaisanpham as cate
ON cate.id = sp.idsanpham
WHERE cate.id = ".$cate." AND sp.tensanpham LIKE '%".$_GET['name']."%'";
$result = mysqli_query($con, $sql);

function checkLogin($result, $con){
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        $data = array();
        while($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        $result = array();
        $result['data'] = $data;
        return json_encode($result);
    } else {
      return http_response_code(404);
    }


}

print_r(checkLogin($result, $con));

?>
