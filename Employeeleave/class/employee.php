<?php
class Employee
{
    private $conn;
    function __construct() {
    session_start();
    $servername = "localhost";
    $dbname = "employeeleave";
    $username = "root";
    $password = "";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;
       }

    }


    public function employee_list(){

       $sql = "SELECT * FROM employee ORDER BY id asc ";
       $result=  $this->conn->query($sql);
       return $result;
    }
     public function employee_report_list(){

       $sql = "SELECT employee.name, leavee.type, admin.id, leave_apply.date
          FROM (((leave_apply
          INNER JOIN employee ON leave_apply.emp_id = employee.id)
          INNER JOIN leavee ON leave_apply.leave_id = leavee.id)
          INNER JOIN admin ON leavee.admin = admin.id)";
       $result=  $this->conn->query($sql);
       return $result;
    }

    public function create_employee_info($post_data=array()){

      if(isset($post_data['create_employee'])){
      $employee_name= mysqli_real_escape_string($this->conn,trim($post_data['employee_name']));
      $contact= mysqli_real_escape_string($this->conn,trim($post_data['contact']));
      $country= mysqli_real_escape_string($this->conn,trim($post_data['country']));
      $sql="INSERT INTO employee (name, contact,designation) VALUES ('$employee_name', '$contact','$country')";

       $result=  $this->conn->query($sql);

          if($result){

              $_SESSION['message']="Successfully Created employee Info";

             header('Location: employee_view.php');
          }

      unset($post_data['create_employee']);
      }


   }

    public function view_employee_by_employee_id($id){
       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="Select * from employee where id='$id'";

       $result=  $this->conn->query($sql);

        return $result->fetch_assoc();

       }
    }


    public function update_employee_info($post_data=array()){
       if(isset($post_data['update_employee'])&& isset($post_data['id'])){

       $name= mysqli_real_escape_string($this->conn,trim($post_data['employee_name']));
       $designation= mysqli_real_escape_string($this->conn,trim($post_data['designation']));
       $contact= mysqli_real_escape_string($this->conn,trim($post_data['contact']));
       $id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE employee SET name='$name',designation='$designation',contact='$contact' WHERE id =$id";

        $result=  $this->conn->query($sql);

           if($result){
               $_SESSION['message']="Successfully Updated employee Info";
           }
       unset($post_data['update_employee']);
       }
    }

    public function delete_employee_info_by_id($id){

       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  employee  WHERE id =$id";
        $result=  $this->conn->query($sql);

           if($result){
               $_SESSION['message']="Successfully Deleted employee Info";

           }
       }
         header('Location: employee_view.php');
    }
    function __destruct() {
    mysqli_close($this->conn);
    }

}

?>
