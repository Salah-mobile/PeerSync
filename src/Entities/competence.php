<?php
class Skill{
    private $id;
    private $name;
    public function __construc($name){
         $this->name=$name;
    } 
    public function setId($id){
         $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
     public function getName(){
        return $this->name;
    }
}
