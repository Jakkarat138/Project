<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <style>
    .form-login {
      width: 100%;
      max-width: 600px;
      padding: 15px;
      margin: auto;
    }
    <style>
  /* ตั้งค่าพื้นหลัง */
  body {
    background: linear-gradient(to right, #d8b5ff, #1eae98); /* ไล่สีม่วง-เขียว */
    color: #4a154b; /* สีตัวอักษร */
    font-family: 'Arial', sans-serif;
  }

  /* กล่องฟอร์ม */
  .form-login {
    border-radius: 12px;
    background: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 30px;
    margin-top: 50px;
  }

  /* หัวข้อ */
  h2 {
    text-align: center;
    color: #8e44ad;
    font-weight: bold;
    margin-bottom: 30px;
  }

  /* ปุ่ม */
  .btn-success {
    background-color:rgb(70, 10, 95);
    border: none;
    transition: 0.3s;
  }

  .btn-success:hover {
    background-color:rgb(212, 142, 241);
  }

  .btn-warning {
    background-color: #e1bee7;
    border: none;
    color: #4a154b;
  }

  .btn-warning:hover {
    background-color: #d1a3d4;
  }

  .btn-info {
    background-color: #9b59b6;
    border: none;
  }

  .btn-info:hover {
    background-color: #884ea0;
  }

  /* อินพุต */
  .form-control {
    border-radius: 6px;
    border: 1px solid #d7bde2;
  }

  .form-control:focus {
    border-color: #8e44ad;
    box-shadow: 0 0 5px rgba(142, 68, 173, 0.5);
  }

  /* ไอคอน */
  i {
    font-size: 2em;
  }
</style>
    
    
  </style>
  <title>เข้าระสู่ระบบจัดการข้อมูลพนักงาน</title>
</head>

<body class="form-login">
  <div class="container">
    <h2> <i class='bx bxs-user-pin' style='color:#9b59b6'></i> เข้าระสู่ระบบจัดการข้อมูลพนักงาน</h2>
    <form method="POST" action="chk.php">
      <div class="mb-3">
        <label for="username" class="form-label">ชื่อเข้าระบบ</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">รหัสผ่าน</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button> <button type="reset" class="btn btn-warning">ล้างข้อมูล</button> <a href="index.php" class="btn btn-info">กลับหน้าหลัก</a>
    </form>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>