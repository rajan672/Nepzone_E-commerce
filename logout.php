<?php

//check the student login email id
if(!isset($_SESSION)){
    session_start();
    session_destroy();
    echo "<script> location.href ='index.php';</script>";
} else {
    //echo "<script> location.href ='index.php';</script>";
}


?>