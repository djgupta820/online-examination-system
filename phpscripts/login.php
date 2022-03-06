<?php 
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    if($uname == "djgupta820" && $pass == "123456789")
    {
        echo "Login Successfull";
    } 
    else{
        echo "invalid Credentials";
    }
?>