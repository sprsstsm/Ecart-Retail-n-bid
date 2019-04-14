<?php 
include('common.php');
include('conn.php');
?>

<?php 

$blogcmd_name= mysqli_real_escape_string($con,trim($_REQUEST['blogcmd_name']));
$blogcmd_email= mysqli_real_escape_string($con,trim($_REQUEST['blogcmd_email']));
$blogcmd_message= mysqli_real_escape_string($con,trim($_REQUEST['blogcmd_message']));
$blog_id= mysqli_real_escape_string($con,trim($_REQUEST['blog_id']));


$QU = mysqli_query($con,"INSERT INTO `blog_cmd`(`blog_id`, `user_id`, `blogcmd_name`, `blogcmd_email`, `blogcmd_message`, `cteate_on`) VALUES ('$blog_id','".$_SESSION['user_id']."','$blogcmd_name','$blogcmd_email','$blogcmd_message','$TIMESTAMP')");

if($QU){
	echo 1;
}

?>