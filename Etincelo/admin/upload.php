<?php
 require("lib/db.php");

$ds = DIRECTORY_SEPARATOR;
        $storeFolder = '../picture/photo';

if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
            $targetFile =  $targetPath. $_FILES['file']['name'];
            if(move_uploaded_file($tempFile,$targetFile)){
                $insert  = $db->prepare("INSERT INTO picture (name, title, date) VALUES  (:name, :title, NOW())");
                $insert->bindValue(":name", $_FILES['file']['name']);
                $insert->bindValue(":title", $_FILES['file']['name']);
                $insert->execute();
            }
        }

?>