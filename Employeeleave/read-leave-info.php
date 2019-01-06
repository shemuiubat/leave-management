<?php
 include 'header.php';


 if(isset($_GET['id'])){
  $leave_info=$leave_obj->view_leave_by_leave_id($_GET['id']);




 }else{
  header('Location: index.php');
 }


 ?>
<div class="container " >

  <div class="row content">




             <a  href="leave_view.php"  class="button button-purple mt-12 pull-right">View leave List</a>

 <h3>View leave Info</h3>


     <hr/>




    <label >Leave Type:</label>
   <?php  if(isset($leave_info['type'])){echo $leave_info['type']; }?>


    <br/>
    <label >Leave Duration:</label>
      <?php  if(isset($leave_info['duration'])){echo $leave_info['duration'];} ?>
    <br/>

    <label >Admin Id:</label>
      <?php  if(isset($leave_info['admin'])){echo $leave_info['admin'];} ?>
    <br/>


     <button onClick="window.print()" class="btn btn-info">Print this page</button>


    <a href="<?php echo 'update-leave-info.php?id='.$leave_info["id"] ?>" class="button button-blue">Edit</a>





  </div>

</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

