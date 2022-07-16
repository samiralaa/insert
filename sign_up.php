<?php
include_once "classis.php";
session_start();

$insert_user=new model ();
$insert_user->insert();


$_SESSION['errors'] = [];
if(isset($_POST["submit"])){
    //validation
    if(empty($username)){
        $_SESSION['errors'][]   ='username is Required';
    }elseif(strlen($username) > 50){
        $_SESSION['errors'][]='username Most be Less than 51';
    }elseif(strlen($username) < 10){
        $_SESSION['errors'][]='username Most be gerater than 9';
    }

    if(empty($password)){
        $_SESSION['errors'][]='password is required';
    }elseif(strlen($password) > 50){
        $_SESSION['errors'][]='password Most be less than 51';
    }elseif(strlen($password) < 10){
        $_SESSION['errors'][]='password Most be gerater than 9';
    }
    if(empty($email)){
        $_SESSION['errors'][]='Email is required';
    }elseif(strlen($email) > 100){
        $_SESSION['errors'][]='Email Most be less than 50';
    }elseif(strlen($email) < 10){
        $_SESSION['errors'][]='Email Most be gerater than 9';
    }
    if(empty($_SESSION['errors'])){
        echo('ok');
    }else {
       header('location:tabls3.php');
    }
}
function showdata($data){
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}
