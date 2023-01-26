<?php
$myJsonFile = file_get_contents('../Storage/users.json');
$data = json_decode($myJsonFile,true);
foreach($data as $user){
    if($user["email"] === $_POST["email"] && $user["password"] === $_POST["password"]){
        header("Location: http://localhost/Maktab/week9/ChatProject/View/Chat.php");
        exit;
    }
}
header("Location: http://localhost/Maktab/week9/ChatProject/View/Login.php");
