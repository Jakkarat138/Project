<?php
require('dbconnect.php');

$emp_id = $_GET["emp_id"];

$sql = "SELECT * FROM employee WHERE emp_id=$emp_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>แก้ไขข้อมูลพนักงาน</title>
  <style>
    body {
      background-color: #f3e5f5; /* สีม่วงอ่อน */
      font-family: Arial, sans-serif;
    }

    .card {
      background: #ffffff;
      border: 1px solid #e0e0e0;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #9575cd; /* สีม่วงอ่อน */
      color: white;
      border-radius: 12px 12px 0 0;
    }

    .form-control {
      border-radius: 8px;
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

    .btn-primary {
      background-color: #ab47bc; /* สีม่วงอ่อน */
      border: none;
    }

    .btn-primary:hover {
      background-color: #7e57c2; /* สีม่วงเข้ม */
    }
  </style>
</head>

<body>
  <div class="container my-5">
    <div class="card">
      <div class="card-header text-center">
        <h2>แก้ไขข้อมูลพนักงาน</h2>
      </div>
      <div class="card-body">
        <form action="updatedata.php" method="POST">
          <input type="hidden" value="<?php echo $row["emp_id"]; ?>" name="emp_id">

          <div class="form-group mb-3">
            <label for="emp_title">คำนำหน้า :</label>
            <select name="emp_title" class="form-control" required>
              <option value="นาย" <?php if ($row["emp_title"] == "นาย") {
                                    echo "SELECTED";
                                  } ?>>นาย</option>
              <option value="นาง" <?php if ($row["emp_title"] == "นาง") {
                                    echo "SELECTED";
                                  } ?>>นาง</option>
              <option value="นางสาว" <?php if ($row["emp_title"] == "นางสาว") {
                                        echo "SELECTED";
                                      } ?>>นางสาว</option>
            </select>
          </div>

          <div class="form-group mb-3">
            <label for="emp_name">ชื่อ :</label>
            <input type="text" name="emp_name" class="form-control" value="<?php echo $row["emp_name"]; ?>">
          </div>

          <div class="form-group mb-3">
            <label for="emp_surname">นามสกุล :</label>
            <input type="text" name="emp_surname" class="form-control" value="<?php echo $row["emp_surname"]; ?>">
          </div>

          <div class="form-group mb-3">
            <label for="emp_birthday">วันเดือนปีเกิด :</label>
            <input type="date" name="emp_birthday" class="form-control" value="<?php echo $row["emp_birthday"]; ?>">
          </div>

          <div class="form-group mb-3">
            <label for="emp_adr">ที่อยู่ปัจจุบัน :</label>
            <textarea name="emp_adr" class="form-control" rows="3"><?php echo $row["emp_adr"]; ?></textarea>
          </div>

          <div class="form-group mb-3">
            <label for="emp_skill">ทักษะความสามารถ :</label>
            <textarea name="emp_skill" class="form-control" rows="3"><?php echo $row["emp_skill"]; ?></textarea>
          </div>

          <div class="form-group mb-3">
            <label for="emp_tel">เบอร์โทรศัพท์ :</label>
            <input type="tel" name="emp_tel" class="form-control" value="<?php echo $row["emp_tel"]; ?>">
          </div>

          <div class="d-flex justify-content-between">
            <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
