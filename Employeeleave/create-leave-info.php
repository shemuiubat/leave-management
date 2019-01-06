<?php
include 'header.php';
if (isset($_POST['create_leave'])) {
    $leave_obj->create_leave_info($_POST);
}
?>
<div class="container">
    <div class="row content">
        <a  href="leave_view.php"  class="button button-purple mt-12 pull-right">View leave List</a>
        <h3>Create leave Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="leave_name"> LeaveType:</label>
                <input type="text" name="type" id="leave_id" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Duration:</label>
                <input type="number" class="form-control" name="duration" id="contact"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact"> Admin Id:</label>
                <input type="number" class="form-control" name="admin" id="contact"  maxlength="50">
            </div>
            <!-- <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="" selected>Select</option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option>
                </select>
            </div>  -->

            <input type="submit" class="button button-green  pull-right" name="create_leave" value="Submit"/>
        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

