<?php
include 'header.php';
$leave_list = $leave_obj->leave_list();
// echo "$leave_list";
?>
<div class="container " >
    <div class="row content">
        <a  href="create-leave-info.php"  class="button button-purple mt-12 pull-right">Create leave</a>
        <h3 style="text-align: center; color: blue;">Leave List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Type</th>

                    <th>Duration</th>
                    <th>Admin Id</th>

                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($leave_list->num_rows > 0) {
  while ($row = $leave_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["type"] ?></td>

                <td><?php echo $row["duration"] ?></td>
                <td><?php echo $row["admin"] ?></td>

                <td class="text-right">
                    <a  href="<?php echo 'delete-leave-info.php?id=' . $row["id"] ?>" class="button button-red">Delete</a>
                    <a  href="<?php echo 'update-leave-info.php?id=' . $row["id"] ?>" class="button button-blue">Update</a>
                    <a href="<?php echo 'read-leave-info.php?id=' . $row["id"] ?>" class="button button-green">View</a>
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

