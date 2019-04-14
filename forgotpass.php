<?php 
include('common.php');
include('conn.php');
?>

<?php 

function sendMail($useremail){
    
$from ='nesanoctact@gmail.com';
$headers  = "From:".$from;
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
    
$msg = "To change the password,Use the following link .<a href='http://wellthoughttech.tech/jloda/changepass.php?email=".$useremail."'>Click Here</a>";

$msg = wordwrap($msg,70);
echo $msg;
mail($useremail,"Change Password",$msg);

}

?>

<?php 
$useremail = mysqli_real_escape_string($con,trim($_REQUEST['forgotemail']));

$count = mysqli_num_rows(mysqli_query($con,"SELECT id FROM user WHERE `useremail`='$useremail'"));
if( $count != 0 ){
     $Query = mysqli_query($con,"SELECT * FROM user WHERE `useremail`='$useremail'");
     $user = mysqli_fetch_assoc($Query);
     echo 1;
     sendMail($useremail);
}else{
    echo -1;
}



?>