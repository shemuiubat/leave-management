<?php
include 'header.php';
if (isset($_POST['create_employee'])) {
    $employee_obj->create_employee_info($_POST);
}
?>
<div class="container">
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">View employee List</a>
        <h3>Create employee Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="employee_name">Name:</label>
                <input type="text" name="employee_name" id="employee_name" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="employee_id">Id:</label>
                <input type="num" name="employee_id" id="employee_name" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="text" class="form-control" name="contact" id="contact"  maxlength="50">
            </div>
            <!-- <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="" selected>Select</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option>
                </select>
            </div>  -->
            <div class="form-group">
                <label for="country">Designation:</label>
                <input type="text" name="country" id="country" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_employee" value="Submit"/>
        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

