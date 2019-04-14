<?php 
include('common.php');
include('conn.php');
?>

<?php 

 unset($_SESSION['user_id']);
 unset($_SESSION['user_email']);
 unset($_SESSION['who_logged']);

  echo "<script>window.location='index.php'</script>";

?>