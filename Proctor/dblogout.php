<?php
session_start();
$_SESSION['sess_user'] = null;
echo '<script> alert("Successfully logged out"); </script>';
echo '<script> window.location.href = \'index2.php\'; </script>';		

?>
