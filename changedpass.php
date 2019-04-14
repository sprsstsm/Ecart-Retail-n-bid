<?php 
include('common.php');
include('conn.php');
?>

<?php 
$useremail = mysqli_real_escape_string($con,trim($_REQUEST['useremail']));
$password = md5($_REQUEST['NewPassword']);

$count = mysqli_num_rows(mysqli_query($con,"SELECT id FROM user WHERE `useremail`='$useremail'"));
if( $count != 0 ){
     echo "UPDATE `user` SET `password`='$password' WHERE `useremail`='$useremail'";
     $Query = mysqli_query($con,"UPDATE `user` SET `password`='$password' WHERE `useremail`='$useremail'");
     $user = mysqli_fetch_assoc($Query);
     echo 1;
     
}else{
    echo -1;
}

?>