<?php
include 'connect.php';
session_start();
 $nick = $_SESSION['nickname'];
//echo 'done';
$output = '';
if (isset($_FILES['file']['name'][0])) 
{
    $file_name = $_FILES['file']['name'][0];
    $sql = "INSERT INTO file_name (usuario,archivo) VALUES ('$nick','$file_name')";
    $update = $mysqli->prepare($sql);
    $update->execute();

        foreach ($_FILES['file']['name'] as $keys => $values) 
        {
            if (!file_exists('sources/'.'profiles/'.$nick.'/'.'upload/')) 
                mkdir('sources/'.'profiles/'.$nick.'/'.'upload/',0777,true);
            if (file_exists('sources/'.'profiles/'.$nick.'/'.'upload/')) {
                if (move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'sources/profiles/'.$nick.'/'.'upload/'.$file_name)) 
                {
                    $output .= '<img src="sources/profiles/'.$nick.'/'.'upload/'.$values.'"/>';
                } 
    }else {
        if (move_uploaded_file($_FILES['file']['tmp_name'][$keys], 'sources/profiles/'.$nick.'/'.'upload/'.$file_name)) 
        {
            $output .= '<img src="sources/profiles/'.$nick.'/'.'upload/'.$file_name.'"/>';
        } 
    }
        }
    }

?>
<style>
    .icon {
        width: 100px;
    }
</style>