<?php
session_start();
require("dbconnect.php");
if ($_SESSION['emp_level'] != "a") {
  echo "<center>หน้าสำหรับผู้ดูแลระบบ <a href=login.php>กรุณาเข้าสู่ระบบก่อน</a></center>";
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
    <title>Admin Dashboard</title>
    <style>
      body {
        background-color: #f3e5f5;
      }

      .card-header {
        background-color: #7e57c2;
        color: white;
      }

      .btn-purple {
        background-color: #9575cd;
        border: none;
        color: white;
      }

      .btn-purple:hover {
        background-color: #6a1b9a;
        color: white;
      }

      .table-dark {
        background-color: #d1c4e9;
      }
    </style>
  </head>

  <body>
    <div class="container mt-5">
      <div class="card shadow-lg">
        <div class="card-header">
          <h2 class="mb-0"><i class='bx bxs-dashboard'></i> ยินดีต้อนรับผู้ดูแลระบบ</h2>
        </div>
        <div class="card-body">
          <p><i class='bx bx-user-voice'></i> สวัสดีคุณ <strong><?php echo $row["emp_title"] . " " . $row["emp_name"] . " " . $row["emp_surname"]; ?></strong> 
            <a href="logout.php" class="btn btn-purple btn-sm float-end"><i class='bx bx-lock-open bx-flashing'></i> Log Out</a></p>

          <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
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
                  <td><a href="editformdata.php?emp_id=<?php echo $row["emp_id"] ?>" class="btn btn-purple btn-sm"><i class='bx bxs-edit'></i> แก้ไข</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-center text-muted">
          <small>&copy; 2025 Admin Dashboard</small>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
<?php } ?>
  </html>
