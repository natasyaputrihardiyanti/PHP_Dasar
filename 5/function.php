<?php
function do_login($username,$password){
  // cek kondisi jika username dan password salah
  if ($username !="admin" || $password !="admin") {
  header("location: index.php?error=wrong");
  }
  if ($username== "admin" && $_POST["password"]=="admin") {
    $_SESSION["user"] =$username;
    $_SESSION["pass"]= $password;
    header("location :beranda.php");
  }
}
function check_login(){
  if (!isset($_SESSION['user'])) {
    // code...
    header("location:index.php");
  }
}
 ?>
