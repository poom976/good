<?php
    include 'condb.php';
    session_start();

    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql="SELECT * FROM member WHERE username='$username' and password='$password' ";
    $result=mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result);

    if ($row > 0) {
       $_SESSION["username"]=$row['username'];
       $_SESSION["pw"]=$row['password'];
       $_SESSION["firstname"]=$row['name'];
       $_SESSION["lastname"]=$row['lastname'];
       $show=header("location:index.php");
    }else{
        $_SESSION["Error"] = "คุณยังไม่เป็นสมาชิก";
        $show=header("location:login.php");
    }
    echo $show;


?>