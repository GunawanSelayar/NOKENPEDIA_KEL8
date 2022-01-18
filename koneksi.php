<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "gunawan";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if ($conn) {
    
}
else {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>