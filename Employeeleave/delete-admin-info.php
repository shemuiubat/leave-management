<?php
 include 'header.php';
 if(isset($_GET['id'])){
  $admin_info=$admin_obj->delete_admin_info_by_id($_GET['id']);


 }else{
  header('Location: index.php');
 }

 ?>
