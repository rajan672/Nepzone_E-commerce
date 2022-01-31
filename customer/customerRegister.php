<?php
include_once('../database-connect.php');



//Inserting the data
/* if(isset($_POST['stusignup']) && isset($_POST['signUser']) && isset($_POST['signEmail']) && isset($_POST['signPass']) ){

    $stuname = $_POST['signUser'];
    echo "$stuname";
    $stuemail = $_POST['signEmail'];
    $stupass = $_POST['signPass'];

    $sql = "INSERT INTO cust_register(cust_name,cust_email,cust_pass) VALUES
    ('$stuname','$stuemail','$stupass')";

    if($conn->query($sql)==TRUE){
        echo json_encode ("OK");
    }else{
        echo json_encode ("failed");
    }
} */


//Inserting the data
if(isset($_POST['stusignup']) && isset($_POST['signUser']) && isset($_POST['signEmail']) && isset($_POST['signPass']) ){

    $stuname = $_POST['signUser'];
    $stuemail = $_POST['signEmail'];
    $stupass = $_POST['signPass'];

    $sql = $conn->prepare("INSERT INTO cust_register(cust_name,cust_email,cust_pass) VALUES('$stuname','$stuemail','$stupass')");

    if($sql->execute()==TRUE){
        echo json_encode ("OK");
    }else{
        echo json_encode ("failed");
    }
}

?>