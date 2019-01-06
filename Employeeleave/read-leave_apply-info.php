<?php
 include 'header.php';


 if(isset($_GET['id'])){
  $leave_apply_info=$leave_apply_obj->view_leave_apply_by_leave_apply_id($_GET['id']);




 }else{
  header('Location: index.php');
 }


 ?>
<div class="container " >

  <div class="row content">




             <a  href="index.php"  class="button button-purple mt-12 pull-right">View leave_apply List</a>

 <h3>View leave_apply Info</h3>


     <hr/>




    <label >Leave Id:</label>
   <?php  if(isset($leave_apply_info['leave_id'])){echo $leave_apply_info['leave_id']; }?>


    <br/>
    <label >Employee Id:</label>
      <?php  if(isset($leave_apply_info['emp_id'])){echo $leave_apply_info['emp_id'];} ?>
    <br/>

    <label >Date:</label>
      <?php  if(isset($leave_apply_info['date'])){echo $leave_apply_info['date'];} ?>
    <br/>



     <button onClick="window.print()" class="btn btn-info">Print this page</button>


    <a href="<?php echo 'update-leave_apply-info.php?id='.$leave_apply_info["id"] ?>" class="button button-blue">Edit</a>





  </div>

</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

