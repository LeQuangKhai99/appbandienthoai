<?php
 include "connect.php";


$sql = "SELECT p.* from permission as p, user_permission as up WHERE p.id = up.per_id AND up.user_id = ".$_POST['user_id'];
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
