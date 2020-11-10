<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $account=[["thanh","thanh123"],["hoang","2001"]];
    if($email == $account[0][0] && $password == $account[0][1]){
        header("location: 123.php");
    }else{
        echo "nhap email va password";
    }
}

