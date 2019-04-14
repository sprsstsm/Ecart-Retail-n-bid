<?php 
include('common.php');
include('conn.php');
?>

<?php 

$blog_id = mysqli_real_escape_string($con,trim($_REQUEST['blog_id']));
$blog_title = mysqli_fetch_assoc(mysqli_query($con,"SELECT title FROM blog WHERE blog_id = '$blog_id'"));
$points = mysqli_real_escape_string($con,trim($_REQUEST['points']));
$user_id = $_SESSION['user_id'];

$limit = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `blog_limit`")); // viewlimit




if( $blog_id != 0 ){

   $cur_limit = mysqli_num_rows(mysqli_query($con,"SELECT * FROM `points_table` WHERE $user_id = '$user_id' AND created_on LIKE '%$CUR_DATE%'"));
   
		   if($limit['viewlimit'] > $cur_limit){
		         $QU = mysqli_query($con,"INSERT INTO `points_table`(`user_id`, `blog_id`, `blog_title`, `points`, `created_on`) VALUES ('$user_id','$blog_id','".$blog_title['title']."','$points','$TIMESTAMP')");
		          echo 1;	
		   }else{
              echo "daliylimitover";
		   }

}else{
   
   echo 0;
}


?>