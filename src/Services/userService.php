<?php
session_start();
require "../Repostries/userRepostrie.php";
$repoU=new UserRepository();
if(isset($_POST["login"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    if($email=="" || $password==""){
        header("Location: ../../index.php");
        exit();
    }else{
        $res=$repoU->login($email,$password);
        if($res){
            $_SESSION["user"]=$res;
           if($res["role_id"]==1){
            header("Location: ../../pages/admin/homePageAdmin.php");
            exit();
           }else{
            header("Location: ../../pages/user/homePageUser.php");
            exit();
           }
        }

    }
}