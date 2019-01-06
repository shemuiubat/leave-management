<?php
include 'header.php';
$employee_list = $employee_obj->employee_list();
?>
<div class="container " >
    <div class="row content">
        <a  href="create-employee-info.php"  class="button button-purple mt-12 pull-right">Create employee</a>
        <h3 style="text-align: center; color: blue;">Employee List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    
                    <th>Id</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Designation</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($employee_list->num_rows > 0) {
  while ($row = $employee_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["Id"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["contact"] ?></td>
                <td><?php echo $row["designation"] ?></td>
                <td class="text-right">
                    <a  href="<?php echo 'delete-employee-info.php?id=' . $row["id"] ?>" class="button button-red">Delete</a>
                    <a  href="<?php echo 'update-employee-info.php?id=' . $row["id"] ?>" class="button button-blue">Update</a>
                    <a href="<?php echo 'read-employee-info.php?id=' . $row["id"] ?>" class="button button-green">View</a>
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

