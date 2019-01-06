<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $leave_apply_info=$leave_apply_obj->delete_leave_apply_info_by_id($_GET['id']);


 }else{
  header('Location: leave_apply_view.php');
 }

 ?>
