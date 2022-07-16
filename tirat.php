<?php
session_start();
$_SESSION['errors'] = [];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
if(isset($_POST["submit"])){
    //validation
    if(empty($firstname)){
        $_SESSION['errors'][]   ='Firstname is Required';
    }elseif(strlen($firstname) > 50){
        $_SESSION['errors'][]='Firstname Most be Less than 51';
    }elseif(strlen($firstname) < 10){
        $_SESSION['errors'][]='Firstname Most be gerater than 9';
    }

    if(empty($lastname)){
        $_SESSION['errors'][]='Lastname is required';
    }elseif(strlen($lastname) > 50){
        $_SESSION['errors'][]='Lastname Most be less than 51';
    }elseif(strlen($lastname) < 10){
        $_SESSION['errors'][]='Lastname Most be gerater than 9';
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
       header('location:register.php');
    }
}
