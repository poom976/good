<?php
include 'condb.php';
//รับค่าตัวแปลจากregister
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

//คำสั่งเพิ่มข้อมูลตาราง member
$sql ="INSERT INTO member(name,lastname,telephon,username,password)
Value('$name','$lastname','$phone','$username','$password')";
$result=mysqli_query($conn,$sql);
if ($result) {
   echo"<script> alert('บันทึกข้อมูลแล้ว'); </script>";
   echo"<script> window.location='register.php'; </script>";
}else{
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    echo"<script> alert('บันทึกข้อมูลไม่สำเร็จ'); </script>";
}

?>