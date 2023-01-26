<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/Chat.css">
</head>

<body>
    <main>
        <div class="header">
            <h6>Chat-room Maktab</h6>
        </div>
        <div class="chatting-area">
            <?php
            $mymessagesfolder = [];
            $myFiles = scandir("../Messages", SCANDIR_SORT_NONE);
            $mymessagesfolder[] = $myFiles;
            foreach ($mymessagesfolder as $mymessages) {
                foreach ($mymessages as $k => $mymessage) {
                    if ($k >= 2) {
                        $myMassageToDisplay = file_get_contents("../Messages/" . $mymessage);
            ?>
                        <span class="chatting-area-span">
                            <span>
                                <!-- <form action="../Auth/Chat.php" method="POST">
                                     <button name="deleting" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button> 
                                </form> -->
                                <span class="name-of-user">
                                    <?php
                                    $myJsonFile = file_get_contents('../Storage/users.json');
                                    $data = json_decode($myJsonFile, true);
                                    foreach ($data as $k=> $user) {
                                        if ($_SESSION['user']['name'] == $user["name"]) {
                                            echo $user["name"];
                                        }
                                    }
                                    ?>
                                </span>
                            </span>
                            <?php if (isset($_POST["file"])) { ?>
                                <span>
                                    <img src="<?php $_FILES["file"]["tmp_name"] ?>" alt="Photo">
                                </span>
                            <?php } else { ?>
                                <span>
                                    <?php echo $myMassageToDisplay; ?>
                                </span>
                            <?php } ?>
                        </span>
            <?php
                    }
                }
            }
            ?>
        </div>
        <div class="typing-area">
            <form action="../Auth/Chat.php" method="POST" enctype="multipart/form-data">
                <textarea name="chat" id="chat"></textarea>
                <div class="uploading-div">
                    <input type="file" name="file" id="file">
                    <label for="file">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="#def2f1" class="bi bi-upload" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                        </svg>
                    </label>
                </div>
                <button class="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="16" fill="#def2f1" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg>
                </button>
            </form>
        </div>
    </main>
</body>

</html>