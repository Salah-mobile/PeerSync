<?php
require_once __DIR__. "/../Entities/competence.php";
require_once __DIR__. "/../connection/connection.php";
class compRepo{
    private $conn;
    public function __construct() {
        $db = new Connection();
        $this->conn = $db->connect();
    }
    public function createSkill(Skill $skill,$user_id){
             try {
                $sql="INSERT INTO skills(name) values (?)";
                $stm=$this->conn->prepare($sql);
                $stm->execute([$skill->getName()]);
                $skill->setId($this->conn->lastInsertId());
                $sql="INSERT INTO user_skills(user_id,skill_id) values (?,?)";
                $stm=$this->conn->prepare($sql);
                $stm->execute([$user_id,$skill->getId()]);
                if($stm){
                    return true;
                }
             } catch (PDOException $e) {
                return $e->getMessage(); 
            }
    }
    public function updateLevelSkill($skill_id,$level){
         try {
            $sql="UPDATE user_skills SET niveau = ? WHERE id=$skill_id";
            $stm=$this->conn->prepare($sql);
            $stm->execute([$stm]);
            if($stm){
                return true;
            }
         } catch (PDOException $e) {
            return $e->getMessage();
         }
    }
    public function updateNameSkill($skill_id,$newName){
        try {
            $sql="UPDATE skills  SET name=? WHERE id=?";
            $stm=$this->conn->prepare();
            $stm->execute([$newName,$skill_id]);
            if($stm){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function deleteSkill($skill_id,$user_id){
        try {
            $sql="DELETE FROM user_skills WHERE user_id =? AND skill_id =?";
            $sql2="DELETE FROM skills WHERE id=?";
            $stm1=$this->conn->prepare($sql);
            $stm2=$this->conn->prepare($sql2);
            $stm1->execute([$user_id,$skill_id]);
            $stm2->execute([$skill_id]);
            if($stm && $stm2){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e){
            return $e->getMessage();
        }
    }
    public function displaySkillUser($user_id){
        try {
            $sql="SELECT skills.name 
            FROM user_skills 
            JOIN skills ON skills.id=skill_id
            where user_skills.user_id=?
            ";
            $stm=$this->conn->prepare($sql);
            $stm->execute([$user_id]);
            $skills=$stm->fetchAll();
            if($skills){
                return $skills;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}