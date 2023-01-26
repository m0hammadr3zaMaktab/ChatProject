
<?php

session_start();
if(isset($_SESSION["user"])){
    header('Location: ./View/Login.php');
}else{
    header('Location: ./View/Register.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/style.css">
</head>
<body>
</body>
</html>
