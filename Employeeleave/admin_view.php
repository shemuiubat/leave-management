<?php
include 'header.php';
$admin_list = $admin_obj->admin_list();
?>
<div class="container " >
    <div class="row content">
        <a  href="create-admin-info.php"  class="button button-purple mt-12 pull-right">Create admin</a>
        <h3 style="text-align: center; color: blue;">admin List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>

                    <th>Contact</th>

                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($admin_list->num_rows > 0) {
  while ($row = $admin_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["name"] ?></td>

                <td><?php echo $row["contact"] ?></td>

                <td class="text-right">
                    <a  href="<?php echo 'delete-admin-info.php?id=' . $row["id"] ?>" class="button button-red">Delete</a>
                    <a  href="<?php echo 'update-admin-info.php?id=' . $row["id"] ?>" class="button button-blue">Update</a>
                    <a href="<?php echo 'read-admin-info.php?id=' . $row["id"] ?>" class="button button-green">View</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>

