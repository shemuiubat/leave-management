<?php
include 'header.php';
if (isset($_GET['id'])) {
    $employee_info = $employee_obj->view_employee_by_employee_id($_GET['id']);
    if (isset($_POST['update_employee']) && $_GET['id'] === $_POST['id']) {
        $employee_obj->update_employee_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " >
    <div class="row content">
        <a href="employee_view.php"  class="button button-purple mt-12 pull-right">View employee List</a>
        <h3>Update employee Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($employee_info['id'])) {
            echo $employee_info['id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="employee_name">Name:</label>
                <input type="text" name="employee_name" value="<?php if (isset($employee_info['employee_name'])) {
                   echo $employee_info['employee_name'];
        } ?>" id="employee_name" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="number" class="form-control" value="<?php if (isset($employee_info['contact'])) {
            echo $employee_info['contact'];
        } ?>" name="contact" id="contact"  maxlength="50">
            </div>

             <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" class="form-control" value="<?php if (isset($employee_info['designation'])) {
            echo $employee_info['designation'];
        } ?>" name="designation" id="designation" required maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="update_employee" value="Update"/>
        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

