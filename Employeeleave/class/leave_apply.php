<?php
class Leave_apply
{
    private $conn;
    function __construct() {

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


    public function leave_apply_list(){

       $sql = "SELECT * FROM leave_apply ORDER BY id asc ";
       $result=  $this->conn->query($sql);
       return $result;
    }

    public function create_leave_apply_info($post_data=array()){

      if(isset($post_data['create_leave_apply'])){
      $emp_id= mysqli_real_escape_string($this->conn,trim($post_data['emp_id']));
      $leave_id= mysqli_real_escape_string($this->conn,trim($post_data['leave_id']));
      $date= mysqli_real_escape_string($this->conn,trim($post_data['date']));
      $sql="INSERT INTO leave_apply (emp_id, leave_id,date) VALUES ('$emp_id', '$leave_id','$date')";

       $result=  $this->conn->query($sql);

          if($result){

              $_SESSION['message']="Successfully Created leave_apply Info";

             header('Location: leave_apply_view.php');
          }

      unset($post_data['create_leave_apply']);
      }


   }

    public function view_leave_apply_by_leave_apply_id($id){
       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="Select * from leave_apply where id='$id'";

       $result=  $this->conn->query($sql);

        return $result->fetch_assoc();

       }
    }


    public function update_leave_apply_info($post_data=array()){
       if(isset($post_data['update_leave_apply'])&& isset($post_data['id'])){
        // $leave= mysqli_real_escape_string($this->conn,trim($post_data['leave_id']));
       $emp_id= mysqli_real_escape_string($this->conn,trim($post_data['emp_id']));

       $date= mysqli_real_escape_string($this->conn,trim($post_data['date']));
       $id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE leave_apply SET emp_id='$emp_id',date='$date' WHERE id =$id";

        $result=  $this->conn->query($sql);

           if($result){
               $_SESSION['message']="Successfully Updated leave_apply Info";
           }
       unset($post_data['update_leave_apply']);
       }
    }

    public function delete_leave_apply_info_by_id($id){

       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  leave_apply  WHERE id =$id";
        $result=  $this->conn->query($sql);

           if($result){
               $_SESSION['message']="Successfully Deleted leave_apply Info";

           }
       }
         header('Location: leave_apply_view.php');
    }
    function __destruct() {
    mysqli_close($this->conn);
    }

}

?>
