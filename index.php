<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:login.php");
}
?>


<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>การเรียนของ ด.ช.ภูริพัฒน์ เหมทานนท์</title>
        <link rel="icon" href="images/จรวด2.png">
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">welcome</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a  class="nav-link active" aria-current="page" href="index.html">หน้าแรก</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ประกาศ
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">อื่นๆ</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="ถาม.html"></a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="วิธีใช้เว็บ.html">วิธีใช้เว็บ</a>
              </li>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="text-input">
                <button class="btn btn-outline-success" type="button" id="run-button">ค้นหา</button>
              </form>
              <a href="logout.php">
              <button type="button" class="btn btn-secondary">ออกจากระบบ</button>
            </a>
          </ul></div>
        </div>
      </nav>
      
      <header id="hero">

<div class="hero-inner">
    <h1>welcome</h1>
    <p>Welcome to the homepage in Dr.Puripat Hemtanon</p>
</div>
 </header>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="คณิต.js"></script>

  

</body>