<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $user = $_POST['user'];
    $servername = "localhost"; //   The Program IS Coded By Basanta Chaudhary
    $username = "root";
    $userpassword = "";
    $databaseuser = "login";
    $connection = mysqli_connect($servername, $username, $userpassword, $databaseuser);
    if (!$connection) {
        die("<script>alert('connection failed !');</script>" . mysqli_connect_error($connection));
    } else {
        $sql = "insert into admin 
        (username,email,userpassword,reuserpassword)
    values ('$user','$email','$password','$repassword')";
        if (mysqli_query($connection, $sql)) {
            print "<script>alert('Successfully submit !');</script>";
            print("<script> window.location.href='https://localhost/web/home.php';</script>");
        } else {
            print "<script>alert('Unuccessfully submit !');</script>";
            print("<script> window.location.href='https://localhost/web/register.php';</script>");
        }
    }
    mysqli_close($connection);
}
?>