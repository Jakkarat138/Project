<?php
require('dbconnect.php');
$emp_data = $_POST["emp_data"];

$sql = "SELECT * FROM employee WHERE emp_name LIKE '%$emp_data%' OR emp_surname LIKE '%$emp_data%' ORDER BY emp_name ASC "; //เลือกข้อมูลจากตาราง employee ออกมาแสดง
$result = mysqli_query($con, $sql); //รันคำสั่งที่ถูกเก็บไว้ในตัวแปร $sql

$count = mysqli_num_rows($result); //เก็บผลที่ได้จากคำสั่ง $result เก็บไว้ในตัวแปร $count
$order = 1; //ให้เริ่มนับแถวจากเลข 1
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>รายชื่อพนักงานทั้งหมด</title>

  <style>
    body {
      background-color: #f3e5f5; /* สีม่วงอ่อน */
      font-family: Arial, sans-serif;
    }

    .container {
      background-color: #ffffff;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #8e24aa; /* สีม่วงอ่อน */
    }

    .table thead {
      background-color: #9575cd; /* สีม่วงอ่อน */
      color: white;
    }

    .table tbody tr:hover {
      background-color: #f1e1f7; /* สีม่วงอ่อนอ่อนๆ เมื่อชี้แถว */
    }

    .btn-info {
      background-color: #ab47bc; /* สีม่วงอ่อน */
      border: none;
    }

    .btn-info:hover {
      background-color: #9c27b0; /* สีม่วงเข้ม */
    }

    .btn-success {
      background-color: #8e24aa; /* สีม่วงอ่อน */
      border: none;
    }

    .btn-success:hover {
      background-color: #7b1fa2; /* สีม่วงเข้ม */
    }

    .btn-danger {
      background-color: #e57373; /* สีแดง */
      border: none;
    }

    .btn-danger:hover {
      background-color: #c62828; /* สีแดงเข้ม */
    }
  </style>

</head>

<body>
  <div class="container">
    <h1 class="text-center mt-3">รายชื่อพนักงานที่ค้นหา</h1>
    <form action="searchdata.php" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้น" class="form-control" name="emp_data" required>
        </div>
        <div class="col-6">
          <input type="submit" value="ค้นหาข้อมูลพนักงาน" class="btn btn-info">
        </div>
      </div>
    </form>

    <?php if ($count > 0) { ?>
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>คำนำหน้า</th>
            <th>ชื่อ</th>
            <th>สกุล</th>
            <th>วันเกิด</th>
            <th>ที่อยู่ปัจจุบัน</th>
            <th>ทักษะความสามารถ</th>
            <th>เบอร์โทรศัพท์</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo $order++; ?></td>
              <td><?php echo $row["emp_title"]; ?></td>
              <td><?php echo $row["emp_name"]; ?></td>
              <td><?php echo $row["emp_surname"]; ?></td>
              <td><?php echo $row["emp_birthday"]; ?></td>
              <td><?php echo $row["emp_adr"]; ?></td>
              <td><?php echo $row["emp_skill"]; ?></td>
              <td><?php echo $row["emp_tel"]; ?></td>
              <!--แก้ไขข้อมูล-->
              <td><a href="editformdata.php?emp_id=<?php echo $row["emp_id"] ?>" class="btn btn-success">แก้ไข</a></td>

              <!--ลบข้อมูล-->
              <td><a href="deletedata.php?emp_id=<?php echo $row["emp_id"] ?>" class="btn btn-danger" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบ</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else { ?>
      <div class="alert alert-danger">
        <b>ไม่พบข้อมูลพนักงาน!!</b>
      </div>
    <?php } ?>
    <a href="index.php" class="btn btn-success">กลับหน้าแรก</a>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
