<?php 
include('common.php');
include('conn.php');
?>

<?php 

$useremail = mysqli_real_escape_string($con,trim($_REQUEST['loginemail']));
$password = md5($_REQUEST['loginpassword']);

$count = mysqli_num_rows(mysqli_query($con,"SELECT id FROM user WHERE `useremail`='$useremail'"));
if( $count != 0 ){
     $Query = mysqli_query($con,"SELECT * FROM user WHERE `useremail`='$useremail' AND `password`='$password'");
     $count = mysqli_num_rows($Query);
     if( $count != 0 ){
         $user = mysqli_fetch_assoc($Query);
         $_SESSION['user_id'] = $user['id'];
         $_SESSION['user_email'] = $user['useremail'];
         $_SESSION['who_logged'] = 'user';
         echo 1;
     }else{
         echo -2;
     }
}else{
    echo -1;
}



?>