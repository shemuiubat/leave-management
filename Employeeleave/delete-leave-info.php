<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $leave_info=$leave_obj->delete_leave_info_by_id($_GET['id']);


 }else{
  header('Location: leave_view.php');
 }

 ?>
