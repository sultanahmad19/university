
<?php
session_start(); 

if (isset($_SESSION['email'])) {
  session_unset();
  session_destroy();
  header('Location: login.php');
  exit();
} else {
  header('Location: login.php');
  exit();
}
?>
