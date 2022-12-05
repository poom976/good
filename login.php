<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 badge bg-light text-dark">
                <h5>เข้าสู่ระบบ</h5>
<form method="POST" action="login_check.php">
    <input type="text" name="username" class="form-control" required placeholder="username"> <br>
    <input type="password" name="password" class="form-control" required placeholder="password"><br>
    <?php
    if (isset($_SESSION["Error"])) {
        echo "<div class='text-danger'>";
        echo $_SESSION["Error"];
        echo "</div>";
    }
    ?><br>
    <input type="submit" name="submit" class="btn btn-primary" Value="เข้าสู่ระบบ">
</form>
            </div>
        </div>
        <a href="register.php">สมัครสมาชิก</a>
    </div>


</body>
</html>