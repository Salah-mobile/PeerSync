<?php
require_once __DIR__. "/../Entities/helpRequest.php";
require_once __DIR__. "/../connection/connection.php";
class HelpReqRepo{
    private $conn;
    public function __construct() {
        $db = new Connection();
        $this->conn = $db->connect();
    }
    public function createHelpReq(HelpRequest $help,$student_id,$skill_id){
       try {
        $sql="INSERT INTO help_requests(title,description,status,student_id,tutor_id,skill_id,created_at,resolved_at) values(?,?,?,?,?,?,NOW(),?)";
        $stm=$this->conn->prepare($sql);
        $stm->execute([
            $help->title,
            $help->description,
            $help->status,
            $student_id,
            null,
            $skill_id,
            null
        ]);
        return $stm;
       } catch (PDOException $e) {
        return $e->getMessage();
       }
    }
    public function deleteHelpRequest($id){
        try {
            $sql="DELETE FROM help_requests WHERE id =?";
            $stm=$this->conn->prepare($sql);
            $stm->execute([$id]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function diplayAllHelpR($id){
        try {
            $sql="SELECT 
            h.*,
            s.nom AS student_nom,
            s.prenom AS student_prenom
            FROM help_requests h
            JOIN users s 
            ON s.id = h.student_id
            WHERE h.tutor_id IS NULL AND s.id <> ?;
            "; 
            $stm=$this->conn->prepare($sql);
            $stm->execute([$id]);
            
            return $result=$stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function displayReqUser($id){
         try {
            $sql="SELECT 
            h.*,
            s.nom AS student_nom,
            s.prenom AS student_prenom,
            k.name AS skillName
            FROM help_requests h
            JOIN users s 
            ON s.id = h.student_id
            JOIN skills k ON k.id=h.skill_id
            WHERE s.id=?;
            "; 
            $stm=$this->conn->prepare($sql);
            $stm->execute([$id]);
            $result=$stm->fetchAll();
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function diplayReqestResolvedByUser($user_id){
        try {
            $sql="SELECT 
            h.*,
            s.nom AS student_nom,
            s.prenom AS student_prenom,
            t.nom AS tutor_nom,
            t.prenom AS tutor_prenom
            FROM help_requests h
            JOIN users s 
            ON s.id = h.student_id
            JOIN users t 
            ON t.id = h.tutor_id
            WHERE h.tutor_id = ?;";
            $stm=$this->conn->prepare($sql);
            $stm->execute([$user_id]);
            $res=$stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function updateStatusResolvedReqest($status,$req_id){
        try {
            $sql="UPDATE help_requests h SET h.status=? ,  resolved_at=NOW() WHERE id=?";
            $stm=$this->conn->prepare($sql);
            $stm->execute([$student_id,$req_id]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
    public function assignRequesToUser($status,$req_id,$user_id){
        try {
            $sql="UPDATE help_requests h SET h.status=?,h.tutor_id=? WHERE id=?";
            $stm=$this->conn->prepare($sql);
            $stm->execute([$student_id,$user_id,$req_id]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
}