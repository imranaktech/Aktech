<?php require_once('inc/top.php'); 
 if(!isset($_SESSION['username']))
 	{
 		header('location:login.php');
 	}?>
<?php 

if(isset($_GET['ad_cat'])){
	$n_cat= $_GET['n_cat'];
	$sql="INSERT INTO categories(category) VALUES('$n_cat')";
	$run=mysqli_query($con,$sql);
}



 ?>
</head>
<body>
<!-- 	this is the satrt of side bars after top bar	 -->

<div class="container-fluid"">
	<div class="row">
<?php require_once('inc/nav.php') ?>

		<div class="col-md-3"><!-- note this is side bar satrt -->
			<?php require_once('inc/side.php') ?>
		</div><!-- note this is side bar end -->




		<div class="col-md-9"><!-- note this is coontent area start -->
			<h2><i class="fa fa-folder-open text text-primary"> Categories</i> <small>Diffrent Ctegories</small></h2> <hr>
			<div class="breadcrumb">
				 <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer text text-primary"></i>  <a href="index.Php">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-folder-open"></i> Ctegories
                                    </li>
                                </ol>
			</div><!-- braed crumb -->

					<div class="row"> <!-- start of row -->
						<div class="col-md-4">
							<form action="">
								<div class="form-group">
								<label for="category">Enter Category Name:</label>
								<input type="text" name="n_cat" placeholder="Enter category name you want to add." class="form-control" required="required">
							</div><!-- form group end -->
							<button type="submit" name="ad_cat" class="btn btn-primary">Add Ctegory Now <i class="fa fa-arrow-circle-right"></i></button>
							</form>
							<hr>
						</div> <!-- this is the end of col-md-4 -->
						<div class="col-md-8">
							
							<table class="table table-hover table-bordered table-striped">
								<thead>
									<tr>
										<td>ID</td>
										<td>Category_Nmae</td>
										<td>Posts</td>
										<td>Edit</td>
										<td>Delete</td>
									</tr>
								</thead>
								<tbody>
									<?php 
							$sql="SELECT * FROM categories  ORDER BY id DESC ";
							$run=mysqli_query($con,$sql);
							while ($row=mysqli_fetch_array($run)) {
							$id=$row['id'];
							$category= $row['category'];
							
							
							
							echo "<tr>
										<td>$id</td>
										<td>$category</td>
										<td>Learn Php in 7 days and satart working on cms</td>
										<td><button type='submit' name='edit' class='btn btn-success'><a href='cat_up.php?id=$id'><i class='fa fa-pencil'></i> Update</a></button></td>
										<td><button type='submit' name' 'edit' class='btn btn-danger'><a href='delete.php?cd=$id'><i class='fa fa-trash'></i> Delete</a></button></td>
									</tr>";
									}
							 ?>
								</tbody>
							</table>
						</div><!-- this is the end of col-md-7 -->
					</div><!-- thi is the end of row -->
		</div><!-- note this is coontent area end -->
</div><!-- this is the end of row --> 
</div><!-- this is the end of container --> 

<!-- 	this is the end of side bars after top bar	 -->
<?php require_once('inc/footer.php') ?>