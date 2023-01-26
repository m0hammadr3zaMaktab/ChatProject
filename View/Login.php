<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/style.css">
</head>
<body>
    <div class="Login-container">
        <form class="form-of-login" action="../Auth/Login.php" enctype="multipart/form-data" method="POST">
            <div class="title">Login</div>
            <div class="subtitle">Login To Your Own Account</div>
            <div class="input-container ic2">
                <input id="email" name="email" class="input" type="text" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email</label>
            </div>
            <div class="input-container ic2">
                <input id="password" name="password" class="input" type="password" placeholder=" " />
                <div class="cut cut-short passwordcut"></div>
                <label for="password" class="placeholder">password</label>
            </div>
            <button type="text" class="submit" name="submit" id="sumbit">submit</button>
            <a href="./Register.php">Wanna Create New Accout?</a>
        </form>
    </div>
</body>