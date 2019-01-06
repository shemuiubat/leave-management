<?php
include 'header.php';
$leave_apply_list = $leave_apply_obj->leave_apply_list();
?>
<div class="container " >
    <div class="row content">
        <a  href="create-leave_apply-info.php"  class="button button-purple mt-12 pull-right">Create leave_apply</a>
        <h3 style="text-align: center; color: blue;">leave_apply List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Leave Id</th>

                    <th>Employee Id</th>

                    <th>Date</th>

                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($leave_apply_list->num_rows > 0) {
  while ($row = $leave_apply_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["leave_id"] ?></td>

                <td><?php echo $row["emp_id"] ?></td>
                <td><?php echo $row["date"] ?></td>

                <td class="text-right">
                    <a  href="<?php echo 'delete-leave_apply-info.php?id=' . $row["id"] ?>" class="button button-red">Delete</a>
                    <a  href="<?php echo 'update-leave_apply-info.php?id=' . $row["id"] ?>" class="button button-blue">Update</a>
                    <a href="<?php echo 'read-leave_apply-info.php?id=' . $row["id"] ?>" class="button button-green">View</a>
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

