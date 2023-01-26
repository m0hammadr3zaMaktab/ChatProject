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
    <div class="container">
        <form class="form" action="../Auth/Register.php" enctype="multipart/form-data" method="POST">
            <div class="title">Welcome</div>
            <div class="subtitle">Let's create your account!</div>
            <div class="input-container ic1">
                <input id="username" name="username" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="username" class="placeholder">Username</label>
            </div>
            <div class="input-container ic2">
                <input id="name" name="name" class="input" type="text" placeholder=" " />
                <div class="cut"></div>
                <label for="name" class="placeholder">Name</label>
            </div>
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
            <a href="./Login.php">Already Have an Account?</a>
        </form>
    </div>
</body>

</html>