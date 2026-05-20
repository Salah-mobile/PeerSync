
<?php
require_once "../connection/connection.php";

class UserRepository {
    private $conn;
    public function __construct() {
        $db = new Connection();
        $this->conn = $db->connect();
    }
    public function login($email,$password){
       try {
          $sql="SELECT * FROM users where email=? and password=?";
          $stm=$this->conn->prepare($sql);
          $stm->execute([$email,$password]);
          $user=$stm->fetch();
          if($user){
            return $user;
          }else{
            return false;
          }

       } catch (PDOException $e) {
        echo $e->getMessage();
       }
    }
}