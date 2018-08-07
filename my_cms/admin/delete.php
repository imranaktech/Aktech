<?php
require_once('inc/top.php');
if(!isset($_SESSION['username']))
 	{
 		header('location:login.php');
 	}

if(isset($_GET['p_d'])){
$id = $_GET['p_d'];

 	$sql = "DELETE FROM posts WHERE id = '$id'";
 	$run = mysqli_query($con,$sql);
 	if ($run) {
	header('location:all_post.php');
}
}

?>

<?php
 if(isset($_GET['bd'])){
$bd = $_GET['bd'];

 	$bd = "DELETE FROM posts WHERE id = '$bd'";
 	$bd_run = mysqli_query($con,$bd);
 	if ($bd_run) {
	header('location:index.php');
}
}
?>
<?php
 if(isset($_GET['cd'])){
$cd = $_GET['cd'];

 	$bd = "DELETE FROM categories WHERE id = '$cd'";
 	$bd_run = mysqli_query($con,$bd);
 	if ($bd_run) {
	header('location:category.php');
}
}

if(isset($_GET['hdc'])){
$hdc = $_GET['hdc'];

 	$hdc = "DELETE FROM comment WHERE id = '$hdc'";
 	$hdc_run = mysqli_query($con,$hdc);
 	if($hdc_run)
 	{
 		 header('location:hide_com.php');
 	}
}


if(isset($_GET['vdc'])){
$vdc = $_GET['vdc'];

 	$vdc = "DELETE FROM comment WHERE id = '$vdc'";
 	$vdc_run = mysqli_query($con,$vdc);
 	if($vdc_run)
 	{
 		 header('location:visible_com.php');
 	}
}

if(isset($_GET['cr'])){
$cr = $_GET['cr'];

 	$cr = "DELETE FROM contact WHERE id = '$cr'";
 	$cr_run = mysqli_query($con,$cr);
 	if($cr_run)
 	{
 		 header('location:cont_req.php');
 	}
}

if(isset($_GET['ar'])){
$ar = $_GET['ar'];

 	$ar = "DELETE FROM contact WHERE id = '$ar'";
 	$ar_run = mysqli_query($con,$ar);
 	if($ar_run)
 	{
 		 header('location:ap_req.php');
 	}
}

?>

