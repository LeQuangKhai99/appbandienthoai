<?php
 include "connect.php";


$sql = "SELECT * from user";
$result = mysqli_query($con, $sql);

function checkLogin($result, $con){
    $tendangnhap = $_POST['tendn'];
    $matkhau = $_POST['mkdn'];
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if ($tendangnhap == $row["username"] && $matkhau == $row["password"]) {
                return json_encode($row);
            }
        }
        return http_response_code(404);
    } else {
      return http_response_code(404);
    }


}

print_r(checkLogin($result, $con));

?>
