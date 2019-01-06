<?php
include 'header.php';
if (isset($_POST['create_leave_apply'])) {
    $leave_apply_obj->create_leave_apply_info($_POST);
}
?>
<div class="container">
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">View leave_apply List</a>
        <h3>Create leave_apply Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="leave_apply_name">Leave Id:</label>
                <input type="number" name="leave_id" id="leave_id" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Employee Id:</label>
                <input type="number" class="form-control" name="emp_id" id="contact"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact"> Date:</label>
                <input type="date" class="form-control" name="date" id="contact"  maxlength="50">
            </div>
            <!-- <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="" selected>Select</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option>
                </select>
            </div>  -->

            <input type="submit" class="button button-green  pull-right" name="create_leave_apply" value="Submit"/>
        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

