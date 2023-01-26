<?php
session_start();
$_SESSION['user'] = [
    'username' => $_POST["username"],
    'name' => $_POST["name"],
    'email' => $_POST["email"],
    'password' => $_POST["password"],
    'role' => "member",
    'situation' => "allowed",
];

$erros = "Your Email Has been Used By Somebody Else";

$myJsonFile = file_get_contents('../Storage/users.json');
$data = json_decode($myJsonFile,true);
foreach($data as $user){
    if($user["email"] == $_POST["email"]){
        header("Location: http://localhost/Maktab/week9/ChatProject/View/Register.php");
        exit;
    }
}
unset($myJsonFile);
$data[] = $_SESSION['user'];
file_put_contents('../Storage/users.json',json_encode($data,JSON_PRETTY_PRINT,JSON_FORCE_OBJECT));
header("Location: http://localhost/Maktab/week9/ChatProject/View/Login.php");






