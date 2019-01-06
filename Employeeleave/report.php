<?php
include 'header.php';
$employee_list = $employee_obj->employee_report_list();
?>
<div class="container " >

  <div class="jumbotron" style="text-align: center;">
    <form action="/action_page.php">

           <input type="text"  placeholder="Search By Employee Name " name="search">

           <button type="submit" class="btn btn-default">Search</button>
    </form>

            <p>Name: Divine IT Limited</p>
            <p>Email: Divineit@gmail.com</p>

       <p>Address:Uttara, 10 No Sector,Road 10, House 42</p>

  </div>


        <table class="table">
            <thead>
                <tr>
                    <th>Employee Name</th>

                    <th> Leave Type</th>
                    <th>Approved By</th>
                    <th>Approved Date</th>

                </tr>
            </thead>
            <tbody>
<?php
if ($employee_list->num_rows > 0) {
  while ($row = $employee_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["name"] ?></td>

                <td><?php echo $row["type"] ?></td>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["date"] ?></td>

            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>


</div>
<?php
include 'footer.php';
?>

