<?php 
    session_start();
    $username=filter_input(INPUT_POST, 'username');
    $password=filter_input(INPUT_POST, 'password');
    if($username=="Annisa" AND $password=="admin")
    {
        $_SESSION["username"]=$username;
        header("location:data_berita.php");
    }else{
        header("location:main_login.php?login_error");
    }
?>