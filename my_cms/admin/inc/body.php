	<h2><i class="fa fa-tachometer  text text-primary"> Dash Board</i> <small>Statistics Overviwe</small></h2> <hr>
			<div class="breadcrumb">
				<li><a href="#">Dashboar</a></li>
			</div>
			<?php 
			
			$query="SELECT * FROM posts WHERE status ='publish'";
			$query_run=mysqli_query($con,$query);
			$row=mysqli_fetch_array($query_run);
			$id = $row['id'];
			$count= mysqli_num_rows($query_run);
			///
			$cat_query="SELECT * FROM categories";
			$cat_run=mysqli_query($con,$cat_query);
			$cat_row=mysqli_fetch_array($cat_run);
			$categories= $cat_row['category'];
			$cat_count=mysqli_num_rows($cat_run);
			///
			$hide_query="SELECT * FROM posts WHERE status='pending' ";
			$hide_run=mysqli_query($con,$hide_query);
			$hide_row=mysqli_fetch_array($hide_run);
			$hide_data= $hide_row['status'];
			$hide_count=mysqli_num_rows($hide_run);

			///
			$h_com_query="SELECT * FROM comment WHERE status='pending'";
			$h_com_run=mysqli_query($con,$h_com_query);
			$h_com_row=mysqli_fetch_array($h_com_run);
			$h_com_data= $h_com_row['status'];
			$h_com_count=mysqli_num_rows($h_com_run);
			///
			$s_com_query="SELECT * FROM comment WHERE status='publish'";
			$s_com_run=mysqli_query($con,$s_com_query);
			$s_com_row=mysqli_fetch_array($s_com_run);
			$s_com_data= $s_com_row['status'];
			$s_com_count=mysqli_num_rows($s_com_run);

			?>
<!-- 	this is the start of boxces  -->
			<div class="row box">
<!-- thi is posts box -->
				<div class="col-md-6 col-lg-3">
					<a href="all_post.php">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="xs-`4">
									<i class="fa fa-eye fa-4x ci"></i>
								</div><!-- xs-3 ka end -->		
								<div class="xs-8">
								  <div class="pull-right" style="font-size: 40px;"><h1><?php echo $count; ?></h1></div>
								  <br>
								  <br>
								  <br>
								  <div class="pull-right ai">Visible Posts</div>
								</div><!-- xs-9 ka end -->		
							</div><!-- panel ka andar vali row ka end -->
						</div><!-- panel heading ends -->
					</a>
						<a href="all_post.php">
							<div class="panel-footer" style="padding-bottom: 25px;">
								<div class="pull-left ">Viwe All Visible Posts</div>
								<div class="pull-right"><i class="fa fa-arrow-circle-right"></i>
								</div>
							</div>
							</a>
					</div> <!-- pannel primary ends here -->
				</div><!-- col-md-6 ends here --><!-- thi is posts box -->




				<div class="col-md-6 col-lg-3">
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="xs-`4">
									<i class="fa fa-eye-slash fa-4x ci"></i>
								</div><!-- xs-3 ka end -->		
								<div class="xs-8">
								  <div class="pull-right" style="font-size: 40px;"><h1><?php echo $hide_count; ?></h1></div>
								  <br>
								  <br>
								  <br>
								  <div class="pull-right ai">All Hidden Posts</div>
								</div><!-- xs-9 ka end -->		
							</div><!-- panel ka andar vali row ka end -->
						</div><!-- panel heading ends -->
						<a href="category.php">
							<div class="panel-footer" style="padding-bottom: 25px;">
								<div class="pull-left">Viwe all Hiden Posts</div>
								<div class="pull-right"><i class="fa fa-arrow-circle-right"></i>
								</div>
							</div>
							</a>

							
					</div> <!-- pannel primary ends here -->
			 </div> <!-- col-md-6 ends here --><!-- thi is comment box -->



<!-- thi is Category  box -->
				<div class="col-md-6 col-lg-3">
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="xs-`4">
									<i class="fa fa-eye fa-4x ci"></i>
								</div><!-- xs-3 ka end -->		
							 <div class="xs-8"> 
								  <div class="pull-right" style="font-size: 40px;"><h1><?php echo $s_com_count; ?></h1></div>
								  <br>
								  <br>
								  <br>
								  <div class="pull-right ai">Visible Comments</div>
								</div><!-- xs-9 ka end -->		
 							</div><!-- rwo -->
						 </div><!-- panel heading ends -->
						 <a href="visible_com.php">
							<div class="panel-footer" style="padding-bottom: 25px;">
								<div class="pull-left">Viwe All Visible Comments</div>
								<div class="pull-right"><i class="fa fa-arrow-circle-right"></i>
								</div>
							</div>
							</a>

							
					</div> <!-- pannel primary ends here -->
				</div><!-- col-md-6 ends here -->



				<!-- thi is Category  box -->


				<div class="col-md-6 col-lg-3">
					<div class="panel panel-red">
						<div class="panel-heading">
							<div class="row">
								<div class="xs-`4">
									<i class="fa fa-eye-slash fa-4x ci"></i>
								</div><!-- xs-3 ka end -->		
							 <div class="xs-8"> 
								  <div class="pull-right" style="font-size: 40px;"><h1><?php echo $h_com_count; ?></h1></div>
								  <br>
								  <br>
								  <br>
								  <div class="pull-right ai">Hidden Comments</div>
								</div><!-- xs-9 ka end -->		
 							</div><!-- rwo -->
						 </div><!-- panel heading ends -->
						 <a href="hide_com.php">
							<div class="panel-footer" style="padding-bottom: 25px;">
								<div class="pull-left">Viwe All Hidden Comments</div>
								<div class="pull-right"><i class="fa fa-arrow-circle-right"></i>
								</div>
							</div>
							</a>
					</div> <!-- pannel primary ends here -->
				</div><!-- col-md-6 ends here --><!-- thi is Category  box -->


<div class="col-md-6 col-lg-3">
					<div class="panel panel-red">
						<div class="panel-heading">
							<div class="row">
								<div class="xs-`4">
									<i class="fa fa-folder fa-4x ci"></i>
								</div><!-- xs-3 ka end -->		
								<div class="xs-8">
								  <div class="pull-right" style="font-size: 40px;"><h1><?php echo $cat_count; ?></h1></div>
								  <br>
								  <br>
								  <br>
								  <div class="pull-right ai">All Categories</div>
								</div><!-- xs-9 ka end -->		
							</div><!-- panel ka andar vali row ka end -->
						</div><!-- panel heading ends -->
						<a href="category.php">
							<div class="panel-footer" style="padding-bottom: 25px;">
								<div class="pull-left">Viwe All Categories</div>
								<div class="pull-right"><i class="fa fa-arrow-circle-right"></i>
								</div>
							</div>
							</a>
</div> <!-- pannel primary ends here -->
				</div><!-- col-md-6 ends here --><!-- thi is Category  box -->

							<div class="col-md-6 col-lg-3">
		<?php 
		 $con_query="SELECT * FROM contact WHERE status='pending'";
			$con_run=mysqli_query($con,$con_query);
			$con_row=mysqli_fetch_array($con_run);
			$con_data= $con_row['status'];
			$con_count_h=mysqli_num_rows($con_run);
			?>
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="xs-`4">
									<i class="fa fa-envelope fa-4x ci"></i>
								</div><!-- xs-3 ka end -->		
								<div class="xs-8">
								  <div class="pull-right" style="font-size: 40px;"><h1><?php echo $con_count_h ?></h1></div>
								  <br>
								  <br>
								  <br>
								  <div class="pull-right ai"> Contact Requests</div>
								</div><!-- xs-9 ka end -->		
							</div><!-- panel ka andar vali row ka end -->
						</div><!-- panel heading ends -->
						<a href="cont_req.php">
							<div class="panel-footer" style="padding-bottom: 25px;">
								<div class="pull-left">Viwe Contact Requests</div>
								<div class="pull-right"><i class="fa fa-arrow-circle-right"></i>
								</div>
							</div>
							</a>
					</div> <!-- pannel primary ends here -->
				</div><!-- col-md-6 ends here --><!-- thi is Category  box -->


				<div class="col-md-6 col-lg-3">
					<?php 
		 $con_query="SELECT * FROM contact WHERE status='publish'";
			$con_run=mysqli_query($con,$con_query);
			$con_row=mysqli_fetch_array($con_run);
			$con_data= $con_row['status'];
			$con_count=mysqli_num_rows($con_run);
			?>
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="xs-`4">
									<i class="fa fa-envelope-open fa-4x ci"></i>
								</div><!-- xs-3 ka end -->		
								<div class="xs-8">
								  <div class="pull-right" style="font-size: 40px;"><h1> <?php echo $con_count; ?></h1></div>
								  <br>
								  <br>
								  <br>
								  <div class="pull-right ai"> Aprroved Requests</div>
								</div><!-- xs-9 ka end -->		
							</div><!-- panel ka andar vali row ka end -->
						</div><!-- panel heading ends -->
						<a href="ap_req.php">
							<div class="panel-footer" style="padding-bottom: 25px;">
								<div class="pull-left">Viwe Aprroved Requests</div>
								<div class="pull-right"><i class="fa fa-arrow-circle-right"></i>
								</div>
							</div>
							</a>
					</div> <!-- pannel primary ends here -->
				</div><!-- col-md-6 ends here --><!-- thi is Category  box -->

				<div class="col-md-6 col-lg-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="xs-`4">
									<i class="fa fa-user fa-4x ci"></i>
								</div><!-- xs-3 ka end -->		
								<div class="xs-8">
								  <div class="pull-right" style="font-size: 40px;"><h1>My Proffile</h1></div>
								  <br>
								  <br>
								  <br>
								  <div class="pull-right ai"> My Proffile Details</div>
								</div><!-- xs-9 ka end -->		
							</div><!-- panel ka andar vali row ka end -->
						</div><!-- panel heading ends -->
						<a href="proffile.php">
							<div class="panel-footer" style="padding-bottom: 25px;">
								<div class="pull-left">Viwe My Proffile</div>
								<div class="pull-right"><i class="fa fa-arrow-circle-right"></i>
								</div>
							</div>
							</a>
					</div> <!-- pannel primary ends here -->
				</div><!-- col-md-6 ends here --><!-- thi is Category  box -->


			</div><!-- end of nested  row or boxces -->
			<hr/>
			<h3>Hidden Posts</h3>
		
			<table class="table table-hover table-striped ">
				<thead>
					<tr class="table-bordered">
						<td>sr #</td>
						<td>Date</td>
						<td>Post Title</td>
						<td>Category</td>
						<td>Post Views</td>
						<td>View Post</td>
						<td>Show Post</td>
						<td>Update posts</td>
						<td>Delete posts</td>
					</tr>
				</thead>
				<tbody>
	<?php 

			$query="SELECT * FROM posts WHERE status='pending' ORDER BY id DESC LIMIT 4";
			$query_run=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($query_run)){
			$date = date('y-m-d');
	        $id = $row['id'];
	        $title = $row['title'];
	        $image = $row['image'];
	        $author_image = $row['author_img'];
	        $author = $row['author'];
	        $categories = $row['categories'];
	        $views= $row['views'];
	        echo "<tr>
						<td>  $id </td>
						<td>$date</td>
						<td> $title </td>
						<td>$categories</td>
						<td> <i class='fa fa-eye'></i> $views</td>
						<td><button type='submit' name='edit' class='btn btn-primary'><a href='view.php?id=$id'><i class='fa fa-eye'></i> Visit Post</a></button></td>
						<td><button type='submit' name='edit' class='btn btn-primary'><a href='show.php?bd=$id'><i class='fa fa-eye-slash'></i> Show</a></button></td>

						<td><button type='submit' name='edit' class='btn btn-success'><a href='update.php?id=$id'><i class='fa fa-pencil'></i> Update</a></button></td>

						<td><button type='submit' name='delete' class='btn btn-danger'><a href='delete.php?bd=$id'><i class='fa fa-trash'></i> Delete</a></button></td>
					
	        ";
	    }

			 ?>
					
					<!-- thi is the end of 1st row data -->

				</tbody>
			</table>
			<button class="btn btn-primary pull-right" style="margin-bottom:40px;"><a href="all_post.php">Viwe All Posts</a></button>