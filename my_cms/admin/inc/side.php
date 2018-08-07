<?php require_once('db.php'); ?>
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
			$h_com_data= $hide_row['status'];
			$h_com_count=mysqli_num_rows($h_com_run);
			///
			$s_com_query="SELECT * FROM comment WHERE status='publish'";
			$s_com_run=mysqli_query($con,$s_com_query);
			$s_com_row=mysqli_fetch_array($s_com_run);
			$s_com_data= $hide_row['status'];
			$s_com_count=mysqli_num_rows($s_com_run);


			$con_query="SELECT * FROM contact WHERE status='pending'";
			$con_run=mysqli_query($con,$con_query);
			$con_row=mysqli_fetch_array($con_run);
			$con_data= $con_row['status'];
			$con_count_h=mysqli_num_rows($con_run);

			?>

			<?php $con_query="SELECT * FROM contact WHERE status='publish'";
			$con_run=mysqli_query($con,$con_query);
			$con_row=mysqli_fetch_array($con_run);
			$con_data= $con_row['status'];
			$con_count=mysqli_num_rows($con_run);

			 ?>
<div class="list-group">
				<a class="list-group-item active" href="index.Php"><i class="fa fa-tachometer fa-2x"></i> Dash Board</a>
				<a class="list-group-item" href="all_post.php"><span class="badge"><?php echo $count; ?></span><i class="fa fa-eye"></i> All Visible Post</a>
				<!-- <a class="list-group-item" href="#"><span class="badge">9</span><i class="fa fa-comment"></i> Comments </a> -->
				<a class="list-group-item" href="hide.Php"><span class="badge"><?php echo $hide_count; ?></span><i class="fa fa-eye-slash"></i> All Hidden Posts</a>
				<a class="list-group-item" href="visible_com.Php"><span class="badge"><?php echo $s_com_count; ?></span><i class="fa fa-eye"></i> All Visible Comments</a>
				<a class="list-group-item" href="hide_com.Php"><span class="badge"><?php echo $h_com_count; ?></span><i class="fa fa-eye-slash"></i> All Hidden Comments</a>
				<a class="list-group-item" href="cont_req.Php"><span class="badge"><?php echo $con_count_h; ?></span><i class="fa fa-envelope"></i> Contact Requests</a>
				<a class="list-group-item" href="ap_req.Php"><span class="badge"><?php echo $con_count; ?></span><i class="fa fa-envelope-open"></i> Aprooved Requests</a>
				<a class="list-group-item" href="category.Php"><span class="badge"><?php echo $cat_count; ?></span><i class="fa fa-folder"></i> Categories</a>
				<a class="list-group-item" href="new_post.Php"><i class="fa fa-plus-square"></i> Add New Post</a>
				<a class="list-group-item" href="proffile.Php"><i class="fa fa-user"></i> My Proffile</a>
				<a class="list-group-item" href="../index.Php"><i class="fa fa-globe"></i> Go To My Web</a>
				<a class="list-group-item" href="../index.Php"><i class="fa fa-external-link"></i> Log Out To Admin</a>
			</div>