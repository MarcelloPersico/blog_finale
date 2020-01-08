<?php 
include_once 'core/bootstrap.php';
include_once 'core/post-repository.php';
include_once 'core/login-handler.php';


if (isset($_POST['email'])) {
    loginUser($_POST['email'], $_POST['password']);
    $islogged =  isLogged();
}   
include 'view/login.php';
?>