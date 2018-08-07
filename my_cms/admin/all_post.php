<?php 
 require_once('inc/top.php');
 if(!isset($_SESSION['username']))
 	{
 		header('location:login.php');
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

			<h2><i class="fa fa-file-text text text-primary"> All Visible Post</i>  <small>Diffrent Data.</small></h2> <hr>
			<div class="breadcrumb">
				 <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer text text-primary"></i>  <a href="index.Php">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-folder-open"></i> All Visible Post
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
						<td>Visit Post</td>
						<td>Add To Draft</td>
						<td>Update</td>
						<td>Delete</td>
					</tr>
				</thead>
				<tbody>
	<?php 

			$query="SELECT * FROM posts WHERE status='publish' ORDER BY id DESC";
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

						<td><button type='submit' name='edit' class='btn btn-primary'><a href='hide.php?id=$id'><i class='fa fa-eye-slash'></i> Hide</a></button></td>

						<td><button type='submit' name='edit' class='btn btn-success'><a href='update.php?id=$id'><i class='fa fa-pencil'></i> Update</a></button></td>

						<td><button type='submit' name='delete' class='btn btn-danger'><a href='delete.php?p_d=$id'><i class='fa fa-trash'></i> Delete</a></button></td>
					
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