<?php
class User{
    private $id;
    private $name;
    private $lastName;
    private $email;
    private $password;
    private $point;
    public function __constructor($name,$lastName,$email,$password,$point){
        $this->name=$name;
        $this->lastName=$lastName;
        $this->email=$email;
        $this->password=$password;
        $this->point=$point;
    }
   public function __set($property, $value) {
        $this->$property = $value;
    }

    public function __get($property) {
        return $this->$property;
    }
}
