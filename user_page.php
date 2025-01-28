<?php
session_start();
require("dbconnect.php");
if ($_SESSION['emp_level'] != "u") {
  echo "<center>หน้าสำหรับผู้ใช้งานระบบ <a href=login.php>กรุณาเข้าสู่ระบบก่อน</a></center>";
  exit();
}
if (!$_SESSION["emp_id"]) {
  header("location:login.php");
} else {

  $sqllogin = "SELECT * FROM employee WHERE emp_id='" . $_SESSION["emp_id"] . "'";
  $result = mysqli_query($con, $sqllogin);
  $row = mysqli_fetch_assoc($result);

?>
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Member</title>

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

      h2 {
        color: #8e24aa; /* สีม่วงอ่อน */
      }

      p {
        font-size: 18px;
        color: #6a1b9a; /* สีม่วงเข้ม */
      }

      .table thead {
        background-color: #9575cd; /* สีม่วงอ่อน */
        color: white;
      }

      .table tbody tr:hover {
        background-color: #f1e1f7; /* สีม่วงอ่อนอ่อนๆ เมื่อชี้แถว */
      }

      .btn-danger {
        background-color: #e57373; /* สีแดง */
        border: none;
      }

      .btn-danger:hover {
        background-color: #c62828; /* สีแดงเข้ม */
      }

      .btn-success {
        background-color: #8e24aa; /* สีม่วงอ่อน */
        border: none;
      }

      .btn-success:hover {
        background-color: #7b1fa2; /* สีม่วงเข้ม */
      }
    </style>

  </head>

  <body>
    <div class="container">
      <h2>ยินดีต้อนรับสมาชิก</h2>
      <p><i class='bx bx-user-voice'></i> สวัสดีคุณ <?php echo $row["emp_title"];
                                                    echo $row["emp_name"];
                                                    echo "&nbsp";
                                                    echo $row["emp_surname"]; ?> <a href="logout.php" class="btn btn-danger btn-sm"><i class='bx bx-lock-open bx-flashing'></i> Log Out</a></p>
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>คำนำหน้า</th>
            <th>ชื่อ</th>
            <th>สกุล</th>
            <th>วันเกิด</th>
            <th>ที่อยู่ปัจจุบัน</th>
            <th>ทักษะความสามารถ</th>
            <th>เบอร์โทรศัพท์</th>
            <th>แก้ไข</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $row["emp_title"]; ?></td>
            <td><?php echo $row["emp_name"]; ?></td>
            <td><?php echo $row["emp_surname"]; ?></td>
            <td><?php echo $row["emp_birthday"]; ?></td>
            <td><?php echo $row["emp_adr"]; ?></td>
            <td><?php echo $row["emp_skill"]; ?></td>
            <td><?php echo $row["emp_tel"]; ?></td>
            <!--แก้ไขข้อมูล-->
            <td><a href="editformdata.php?emp_id=<?php echo $row["emp_id"] ?>" class="btn btn-success">แก้ไข</a></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
<?php  } ?>

  </html>
