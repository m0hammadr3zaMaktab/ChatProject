<?php
if(isset($_POST['submit'])){
    if($_POST['submit']){
        $idOfMassages = 1;
        while (file_exists("../Messages/" . $idOfMassages)) {
            $idOfMassages++;
        }
        if(isset($_POST["file"])){
            $myFile = fopen("../Messages/".$_FILES["type"]. $idOfMassages, "w");
        }else{
            $myFile = fopen("../Messages/" . $idOfMassages, "w");
        }
        fwrite($myFile, $_POST['chat']);
        fclose($myFile);
        header("Location: http://localhost/Maktab/week9/ChatProject/View/Chat.php");
    }
}
// if($_POST['delete']){
//     echo "hi";
// }