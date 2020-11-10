<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $account=[["thanh","thanh123"],["thang","thang123"]];
    if ($email === $account[0][0] && $password === $account[0][1]) {
//        echo "<h2>Welcome <span style='color:red'>" .$email. "</span> to website</h2>";
//    } else{
//        echo "<h2><span style='color:red'>Login Error</span></h2>";
//    }
    }
}

