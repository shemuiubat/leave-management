<?php
include 'header.php';
if (isset($_GET['id'])) {
    $leave_info = $leave_obj->view_leave_by_leave_id($_GET['id']);
    if (isset($_POST['update_leave']) && $_GET['id'] === $_POST['id']) {
        $leave_obj->update_leave_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " >
    <div class="row content">
        <a href="leave_view.php"  class="button button-purple mt-12 pull-right">View leave List</a>
        <h3>Update leave Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($leave_info['id'])) {
            echo $leave_info['id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="leave_name">Leave Type:</label>
                <input type="text" name="type" value="<?php if (isset($leave_info['type'])) {
                   echo $leave_info['type'];
        } ?>" id="leave_name" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Duration:</label>
                <input type="number" value="<?php if (isset($leave_info['duration'])) {
            echo $leave_info['duration'];
        } ?>" name="duration" id="contact"class="form-control"  maxlength="50">
            </div>
             <div class="form-group">
                <label for="contact">Admin Id:</label>
                <input type="number" value="<?php if (isset($leave_info['admin'])) {
            echo $leave_info['admin'];
        } ?>" name="admin" id="contact" class="form-control"  maxlength="50">
            </div>


            <input type="submit" class="button button-green  pull-right" name="update_leave" value="Update"/>
        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

