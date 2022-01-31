
<?php
session_start();
/* include('security.php'); */
/* include('database/dbconfig.php'); */
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "admindashboard";

$connection = mysqli_connect($server_name, $db_username, $db_password, $db_name);



if (isset($_POST['registerbtn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    /* $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        */
    if ($password === $cpassword) {
        $query = "INSERT INTO register(username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo "Saved";
            $_SESSION['status'] = "Admin Profile Added";
            $_SESSION['status_code'] = "success";
            header('Location: register.php');
        } else {
            $_SESSION['status'] = "Admin Profile Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: register.php');
        }
    } else {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        $_SESSION['status_code'] = "warning";
        header('Location: register.php');
    }
}
?>