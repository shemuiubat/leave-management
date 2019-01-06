<?php
class Leave
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


    public function leave_list(){

       $sql = "SELECT * FROM leavee";
       $result=  $this->conn->query($sql);
       return $result;
    }

    public function create_leave_info($post_data=array()){

      if(isset($post_data['create_leave'])){
      $type= mysqli_real_escape_string($this->conn,trim($post_data['type']));
      $duration= mysqli_real_escape_string($this->conn,trim($post_data['duration']));
      $admin= mysqli_real_escape_string($this->conn,trim($post_data['admin']));
      $sql="INSERT INTO leavee (type, duration,admin) VALUES ('$type', '$duration','$admin')";

       $result=  $this->conn->query($sql);

          if($result){

              $_SESSION['message']="Successfully Created leave Info";

             header('Location: leave_view.php');
          }

      unset($post_data['create_leave']);
      }


   }

    public function view_leave_by_leave_id($id){
       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="Select * from leavee where id='$id'";

       $result=  $this->conn->query($sql);

        return $result->fetch_assoc();

       }
    }


    public function update_leave_info($post_data=array()){
       if(isset($post_data['update_leave'])&& isset($post_data['id'])){

       $type= mysqli_real_escape_string($this->conn,trim($post_data['type']));
       $duration= mysqli_real_escape_string($this->conn,trim($post_data['duration']));
       $admin= mysqli_real_escape_string($this->conn,trim($post_data['admin']));
       $id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE leavee SET type='$type',duration='$duration',admin='$admin' WHERE id =$id";

        $result=  $this->conn->query($sql);

           if($result){
               $_SESSION['message']="Successfully Updated leave Info";
           }
       unset($post_data['update_leave']);
       }
    }

    public function delete_leave_info_by_id($id){

       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  leavee  WHERE id =$id";
        $result=  $this->conn->query($sql);

           if($result){
               $_SESSION['message']="Successfully Deleted leave Info";

           }
       }
         header('Location: leave_view.php');
    }
    function __destruct() {
    mysqli_close($this->conn);
    }

}

?>
