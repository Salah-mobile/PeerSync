<?php
class HelpRequest{
    private $id;
    private $title;
    private $description;
    private $status;
    private $createdAt;
    public function __construct($title,$description,$status){
       $this->title=$title;
       $this->description=$description;
       $this->status=$status;
    }
    public function __set($property, $value) {
        $this->$property = $value;
    }

    public function __get($property) {
        return $this->$property;
    }
}