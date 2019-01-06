<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Employee Leave Management</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
    background-image: url("img.jpg");
   background-repeat: no-repeat;
   }

        </style>
    </head>
    <body >
        <?php
        include './class/employee.php';
        $employee_obj = new Employee();

          include './class/admin.php';
        $admin_obj = new Admin();

         include './class/leave.php';
        $leave_obj = new Leave();

        include './class/leave_apply.php';
        $leave_apply_obj = new Leave_apply();
        ?>

<nav class="navbar navbar-light" style="background-color: black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Employee Leave Management</a>
    </div>
 <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>



      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="employee_view.php">Employee</a></li>
          <li><a href="leave_view.php">Leave</a></li>
          <li><a href="admin_view.php">Admin</a></li>
          <li><a href="leave_apply_view.php">Leave Apply</a></li>
        </ul>
      </li>
      <li><a href="report.php">Report</a></li>
    </ul>


  </div>
</nav>
