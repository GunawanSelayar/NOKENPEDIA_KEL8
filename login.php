<?php 
error_reporting(0);
include 'koneksi.php';
session_start();

?>
<?php
if (isset($_SESSION['username'])) {
    header("Location: ./");
     echo "<script>alert('anda berhasil login!')</script>";
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location:./");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PAPEDA Sorong</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <center>
      <div class="logo"><img src="./img/logo 2.png" alt="" /></div>
    </center>
    <form class="box" action="" method="post">
      <h1>Login</h1>
      <input type="text" name="email" placeholder="Username" />
      <input type="password" name="password" placeholder="Password" />
      <input type="submit" name="submit" hrvalue="Login" link href="home.html" />
    </form>
  </body>
</html>
