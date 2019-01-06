<?php
 include 'header.php';


 if(isset($_GET['id'])){
  $employee_info=$employee_obj->view_employee_by_employee_id($_GET['id']);




 }else{
  header('Location: index.php');
 }


 ?>
<div class="container " >

  <div class="row content">




             <a  href="employee_view.php"  class="button button-purple mt-12 pull-right">View employee List</a>

 <h3>View Employee Info</h3>


     <hr/>




    <label >Id:</label>
   <?php  if(isset($employee_info['id'])){echo $employee_info['id']; }?>


    <br/>
    <label >Name:</label>
   <?php  if(isset($employee_info['name'])){echo $employee_info['name']; }?>
   </br>
    <label >Contact:</label>
      <?php  if(isset($employee_info['contact'])){echo $employee_info['contact'];} ?>
    <br/>


    <label >Designation:</label>
      <?php  if(isset($employee_info['designation'])){echo $employee_info['designation'];} ?>
    <br/>


     <button onClick="window.print()" class="btn btn-info">Print this page</button>

    <a href="<?php echo 'update-employee-info.php?id='.$employee_info["id"] ?>" class="button button-blue">Edit</a>





  </div>

</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

