<?php
include 'header.php';
if (isset($_GET['id'])) {
    $admin_info = $admin_obj->view_admin_by_admin_id($_GET['id']);
    if (isset($_POST['update_admin']) && $_GET['id'] === $_POST['id']) {
        $admin_obj->update_admin_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " >
    <div class="row content">
        <a href="admin_view.php"  class="button button-purple mt-12 pull-right">View admin List</a>
        <h3>Update admin Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($admin_info['id'])) {
            echo $admin_info['id'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="admin_name">Name:</label>
                <input type="text" name="name" value="<?php if (isset($admin_info['name'])) {
                   echo $admin_info['name'];
        } ?>" id="admin_name" class="form-control" required maxlength="50">
            </div>

            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="number" class="form-control" value="<?php if (isset($admin_info['contact'])) {
            echo $admin_info['contact'];
        } ?>" name="contact" id="contact"  maxlength="50">
            </div>


            <input type="submit" class="button button-green  pull-right" name="update_admin" value="Update"/>
        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

