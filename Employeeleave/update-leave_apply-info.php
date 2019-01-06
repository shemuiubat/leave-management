<?php
include 'header.php';
if (isset($_GET['id'])) {
    $leave_apply_info = $leave_apply_obj->view_leave_apply_by_leave_apply_id($_GET['id']);
    if (isset($_POST['update_leave_apply']) && $_GET['id'] === $_POST['id']) {
        $leave_apply_obj->update_leave_apply_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " >
    <div class="row content">
        <a href="leave_apply_view.php"  class="button button-purple mt-12 pull-right">View leave_apply List</a>
        <h3>Update leave_apply Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($leave_apply_info['id'])) {
            echo $leave_apply_info['id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="leave_apply_name">Leave Id:</label>
                <input type="number" name="leave_id" value="<?php if (isset($leave_apply_info['leave_id'])) {
                   echo $leave_apply_info['leave_id'];
        } ?>" id="leave_id" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Employee Id:</label>
                <input type="number" class="form-control" value="<?php if (isset($leave_apply_info['emp_id'])) {
            echo $leave_apply_info['emp_id'];
        } ?>" name="emp_id" id="contact"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="contact">Date:</label>
                <input type="date" class="form-control" value="<?php if (isset($leave_apply_info['date'])) {
            echo $leave_apply_info['date'];
        } ?>" name="date" id="date"  maxlength="50">
            </div>


            <input type="submit" class="button button-green  pull-right" name="update_leave_apply" value="Update"/>
        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

