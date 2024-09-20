<?php
    include '../connect.php';
    $sql = "DELETE FROM tb_register WHERE std_id='".$_REQUEST['std_id']."'";
    $query = $conn->query($sql);
    if ($query) {
        echo "<script>
        alert('ลบข้อมูลสำเร็จ');
        window.location.href='../showuser.php';
        </script>";
    }else{
        echo $conn->error;
    }
?>