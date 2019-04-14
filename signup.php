<?php 
include('common.php');
include('conn.php');
?>

<?php 

$username= mysqli_real_escape_string($con,trim($_REQUEST['username']));
$useremail = mysqli_real_escape_string($con,trim($_REQUEST['useremail']));
$password = md5($_REQUEST['password']);
$country = mysqli_real_escape_string($con,trim($_REQUEST['country']));
$country = explode(',',$country);

$code = $country[0];
$country_name = $country[1];
$firstthree = substr(strtoupper($username),0,3);
$today = date("His");

$UNIQID =  $firstthree.$today.$code;

$count = mysqli_num_rows(mysqli_query($con,"SELECT id FROM user WHERE `useremail`='$useremail'"));
if( $count == 0){
    $QU = mysqli_query($con,"INSERT INTO user (`unique_id`,`username`,`useremail`,`country`,`country_code`,`password`,`create_on`) VALUES ('$UNIQID','$username','$useremail','$country_name','$code','$password','$TIMESTAMP') ");
    echo 1;
}else{
    echo 2;
}



?>