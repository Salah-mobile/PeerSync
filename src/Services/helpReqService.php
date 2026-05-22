<?php
require_once "../Repostries/helpReqRepo.php";
require_once "../Entities/helpRequest.php";
$reqestRepo=new HelpReqRepo();
session_start();
if(isset($_POST["addR"])){
    $title=$_POST["requestName"];
    $skill=$_POST["requestSkill"];
    $description=$_POST["requestDescription"];
    if($title=="" || $skill=="" || $description==""){
        header("../../pages/pageMenu/requestPage.php?err=empty");
        exit();
    }else{
        $reqestRepo->createHelpReq(new HelpRequest($title,$description,"pending"),$_SESSION["user"]["id"],$skill);
        header("Location: ../../pages/user/homePageUser.php?page=requests");
        exit();
    }
}