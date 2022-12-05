<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <div class="container">
    สมัครสมาชิก
    <br>
    <form method="POST" action="insert_register.php">
    ชื่อ<input type="text" name="firstname" class="form-control" required>
    นามกุล<input type="text" name="lastname" class="form-control" required>
    เบอร์โทรศัพท์<input type="number" name="phone" class="form-control" required>
    username<input type="text" name="username" class="form-control" required>
    password<input type="password" name="password" class="form-control" required><br>
    <input type="submit" name="submit" class="btn btn-primary" value="บันทึก">
    <input type="reset" name="cancle" class="btn btn-primary" value="ยกเลิก"><br>

    <a href="login.php">เข้าสู่ระบบ</a>
    </form>
   </div>


</body>
</html>