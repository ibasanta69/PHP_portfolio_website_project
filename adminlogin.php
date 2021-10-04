<?php
if ((isset($_POST['login']))) {
  $emailId = $_POST['email'];
  $password = $_POST['password'];
  $servername = "localhost";
  $username = "root";
  $userpassword = "";
  $databaseuser = "login";
  $connection = mysqli_connect($servername, $username, $userpassword, $databaseuser);
  if (!$connection) {
    print("<script> alert('Unsccessfully')</script>" . mysqli_connect_error($connection));
  } else {
    $sql = "select username,userpassword from admin where username='$emailId' AND userpassword='$password'";
    $result = mysqli_query($connection, $sql) or die("<script>alert('failed');</script>");
    if (mysqli_num_rows($result) > 0) {
      print("<script> window.location.href='https://localhost/web/hhome.php';</script>");
    } else {

      print("<script>alert('User && Password are Invalid !');</script>");
      print("<script> window.location.href='https://localhost/web/home.php';</script>");
    }
  }
  mysqli_close($connection);
}
?>
