<?php
// เชื่อมต่อฐานข้อมูล
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_itregit011';

$conn = new mysqli($hostname, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// สมมติว่าต้องการอัพเดทข้อมูลในตาราง "users"
$id = 1; // ID ของเรคอร์ดที่จะทำการแก้ไข
$std_name = "ชื่อใหม่"; // ชื่อใหม่ที่ต้องการตั้ง

$sql = "UPDATE users SET name='$std_name' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "แก้ไขข้อมูลเรียบร้อย";
} else {
    echo "เกิดข้อผิดพลาด: " . $conn->error;
}

$conn->close(); // ปิดการเชื่อมต่อ
?>