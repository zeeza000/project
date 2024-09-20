<?php

include "../connect.php";
$sql = "INSERT INTO tb_register(std_id,std_name,std_address,std_zipcode,std_tel,std_lineid) VALUES('".$_REQUEST["std_id"]."','".$_REQUEST["std_name"]."','".$_REQUEST["std_address"]."','".$_REQUEST["std_zipcode"]."','".$_REQUEST["std_tel"]."','".$_REQUEST["std_lineid"]."')";
$query = $conn->query($sql);


if ($query) {
    echo "<script>
        alert('เพิ่มข้อมูลสำเร็จ')
        window.location.href='../showuser.php';
    </script>";
}else {
    echo $conn->error;
}

?>