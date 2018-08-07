<?php 
 require_once('inc/top.php');
 if(!isset($_SESSION['username']))
 	{
 		header('location:login.php');
 	}



 	if (isset($_GET['hd'])) {
 		$id= $_GET['hd'];
 		$sql="UPDATE posts SET status='publish' WHERE id='$id'";
 		$run=mysqli_query($con,$sql);
 	}
 	if (isset($run)) {
 		header('location:hide.php');
 	}
 	if (isset($_GET['bd'])) {
 		$id= $_GET['bd'];
 		$sql="UPDATE posts SET status='publish' WHERE id='$id'";
 		$run=mysqli_query($con,$sql);
 	}
 	if (isset($run)) {
 		header('location:index.php');
 	}


 	if(isset($_GET['com'])){
$com = $_GET['com'];

 	$com = "UPDATE comment SET status='publish' WHERE id = '$com'";
 	$com_run = mysqli_query($con,$com);
 	if($com_run)
 	{
 		header('location:hide_com.php');
 	}
}

if(isset($_GET['cont'])){
$cont = $_GET['cont'];

 	$cont = "UPDATE contact SET status='publish' WHERE id = '$cont'";
 	$cont_run = mysqli_query($con,$cont);
 	if($cont_run)
 	{
 		header('location:cont_req.php');
 	}
}
if(isset($_GET['apr'])){
$apr = $_GET['apr'];

 	$apr = "UPDATE contact SET status='pending' WHERE id = '$apr'";
 	$cont_run = mysqli_query($con,$apr);
 	if($cont_run)
 	{
 		header('location:ap_req.php');
 	}
}
?>


</head>
<body>

<!-- 	this is the satrt of side bars after top bar	 -->

<div class="container-fluid">
	<div class="row">

<?php require_once('inc/nav.Php'); ?>

		<div class="col-md-3"><!-- note this is side bar satrt -->
			<?php require_once('inc/side.php'); ?>
		</div><!-- note this is side bar end -->


		<div class="col-md-9"><!-- note this is coontent area start -->

			<h2><i class="fa fa-file-text  text text-primary"> All Posts</i> <small>Diffrent Data.</small></h2> <hr>
			<div class="breadcrumb">
				 <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer text text-primary"></i>  <a href="index.Php"> Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-folder-open"></i> All Post
                                    </li>
                                </ol>
			</div><!-- braed crumb -->
		
			<table class="table table-hover table-striped ">
				<thead>
					<tr class="table-bordered">
						<td>sr #</td>
						<td>Date</td>
						<td>Post Title</td>
						<td>Category</td>
						<td>Views</td>
						<td>View Post</td>
						<td>Add To Hidden</td>
						<td>Update</td>
						<td>Delete</td>
					</tr>
				</thead>
				<tbody>
	<?php 

			$query="SELECT * FROM posts WHERE status='pending'";
			$query_run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($query_run)){
			$id = $row['id'];
	        $now = $row['p_date'];
	 		$date = date_create($now);
	 		$my_date = date_format($date,"D-F-Y");
	        $title = $row['title'];
	        $image = $row['image'];
	        $author_image = $row['author_img'];
	        $author = $row['author'];
	        $categories = $row['categories'];
	        $views= $row['views'];
	        echo "<tr class='table-bordered'>
						<td>  $id </td>
						<td>$my_date</td>
						<td> $title </td>
						<td>$categories</td>
						<td> <i class='fa fa-eye'></i> $views</td>

						<td><button type='submit' name='edit' class='btn btn-primary'><a href='view.php?id=$id'><i class='fa fa-eye'></i> Visit Post</a></button></td>
						<td><button type='submit' name='edit' class='btn btn-primary'><a href='show.php?id=$id'><i class='fa fa-eye-slash'></i> Show</a></button></td>

						<td><button type='submit' name='edit' class='btn btn-success'><a href='update.php?id=$id'><i class='fa fa-pencil'></i> Update</a></button></td>

						<td><input type='submit' name='delete' class='btn btn-danger'><a href='delete.php?id=$id'><i class='fa fa-trash'></i> Delete</a></td>
					
	        ";
	    }

			 ?>
					
					<!-- thi is the end of 1st row data -->

				</tbody>
			</table>
			<button class="btn btn-primary pull-right" style="margin-bottom:40px;"><a href="index.php">Back To Dashboard</a></button>
		</div><!-- note this is coontent area end -->
</div><!-- this is the end of row --> 
</div><!-- this is the end of container --> 

<!-- 	this is the end of side bars after top bar	 -->


<?php require_once('inc/footer.php'); ?>