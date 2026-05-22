<?php
require_once "../Entities/competence.php";
require_once "../Repostries/compRepo.php";
session_start();
$comR=new compRepo();
$user=$_SESSION["user"];
if(isset($_POST["add"])){
    $newSkill=$_POST["comp"];
    if($newSkill==""){
        header("Location: ../../pages/user/homePageUser.php?err=emp");
        exit();
    }else{
        $skill=new Skill($newSkill);
        $comR->createSkill($skill,$user["id"]);
        header("Location: ../../pages/user/homePageUser.php");
        exit();
    }
}