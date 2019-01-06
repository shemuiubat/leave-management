<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $employee_info=$employee_obj->delete_employee_info_by_id($_GET['id']);


 }else{
  header('Location: index.php');
 }

 ?>
