<?php
class Admin
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


    public function admin_list(){

       $sql = "SELECT * FROM admin ORDER BY id asc ";
       $result=  $this->conn->query($sql);
       return $result;
    }

    public function create_admin_info($post_data=array()){

      if(isset($post_data['create_admin'])){
      $admin_name= mysqli_real_escape_string($this->conn,trim($post_data['admin_name']));
      $contact= mysqli_real_escape_string($this->conn,trim($post_data['contact']));

      $sql="INSERT INTO admin (name, contact) VALUES ('$admin_name', '$contact')";

       $result=  $this->conn->query($sql);

          if($result){

              $_SESSION['message']="Successfully Created admin Info";

             header('Location: admin_view.php');
          }

      unset($post_data['create_admin']);
      }


   }

    public function view_admin_by_admin_id($id){
       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="Select * from admin where id='$id'";

       $result=  $this->conn->query($sql);

        return $result->fetch_assoc();

       }
    }


    public function update_admin_info($post_data=array()){
       if(isset($post_data['update_admin'])&& isset($post_data['id'])){

       $name= mysqli_real_escape_string($this->conn,trim($post_data['name']));
       $contact= mysqli_real_escape_string($this->conn,trim($post_data['contact']));
       $id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE admin SET name='$name',contact='$contact' WHERE id =$id";

        $result=  $this->conn->query($sql);

           if($result){
               $_SESSION['message']="Successfully Updated admin Info";
           }
       unset($post_data['update_admin']);
       }
    }

    public function delete_admin_info_by_id($id){

       if(isset($id)){
       $id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  admin  WHERE id =$id";
        $result=  $this->conn->query($sql);

           if($result){
               $_SESSION['message']="Successfully Deleted admin Info";

           }
       }
         header('Location: admin_view.php');
    }
    function __destruct() {
    mysqli_close($this->conn);
    }

}

?>
