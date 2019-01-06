<?php
include 'header.php';
if (isset($_POST['create_admin'])) {
    $admin_obj->create_admin_info($_POST);
}
?>
<div class="container">
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">View admin List</a>
        <h3>Create admin Info</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="admin_name">Name:</label>
                <input type="text" name="admin_name" id="admin_name" class="form-control" required maxlength="50">
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

            <input type="submit" class="button button-green  pull-right" name="create_admin" value="Submit"/>
        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

