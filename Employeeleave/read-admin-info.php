<?php
 include 'header.php';


 if(isset($_GET['id'])){
  $admin_info=$admin_obj->view_admin_by_admin_id($_GET['id']);




 }else{
  header('Location: index.php');
 }


 ?>
<div class="container " >

  <div class="row content">




             <a  href="index.php"  class="button button-purple mt-12 pull-right">View admin List</a>

 <h3>View admin Info</h3>


     <hr/>




    <label >Name:</label>
   <?php  if(isset($admin_info['name'])){echo $admin_info['name']; }?>


    <br/>
    <label >Contact:</label>
      <?php  if(isset($admin_info['contact'])){echo $admin_info['contact'];} ?>
    <br/>





     <button onClick="window.print()" class="btn btn-info">Print this page</button>

    <a href="<?php echo 'update-admin-info.php?id='.$admin_info["id"] ?>" class="button button-blue">Edit</a>





  </div>

</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

