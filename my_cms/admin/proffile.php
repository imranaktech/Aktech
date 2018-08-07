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
			<h2><i class="fa fa-user text text-primary">  My Proffile</i><small> Change Your Proffile</small></h2> <hr>
			<div class="breadcrumb">
				 <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer text text-primary"></i>  <a href="index.Php"> Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-user"></i> My Proffile
                                    </li>
                                </ol>
			</div><!-- braed crumb -->

	<div class="col-md-7">
		<?php 

			$db="SELECT * FROM admin";
			$db_run=mysqli_query($con,$db);
			$row=mysqli_fetch_array($db_run);
			$email=$row['email'];
			$username=$row['username'];
			$password=$row['password'];
			if(isset($_POST['update'])){
			$n_e=$_POST['n_e'];
			$n_u=$_POST['n_u'];
			$n_p=$_POST['n_p'];
			$sql="UPDATE admin SET username='$n_u',password='$n_p',email='$n_e'";
			$run=mysqli_query($con,$sql);
			if ($run) {
				header('location:proffile.php');
			
		}
		}
	 ?>
		<h3 class="text text-primary">Update Proffile Now</h3>
		<form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="full-name">Enter Your Email*:</label>
                                    <input type="text" name="n_e" class="form-control" placeholder="Enter Your Email You Want to set as new Email" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="full-name">Enter Your Username*:</label>
                                    <input type="text" name="n_u" class="form-control" placeholder="Enter Your Username You Want to set as new Username" required="required">
                                </div>
                              <div class="form-group">
                                    <label for="full-name">Enter Your Password*:</label>
                                    <input type="text" name="n_p" class="form-control" placeholder="Enter Your Password You Want to set as new Password" required="required">
                                </div>
                                <input type="submit" name="update" value="Update" class="btn btn-primary pull-right" style="margin-bottom: 70px;">
                            </form>
	</div>
<div class="col-md-5">
		<h3 class="text text-primary">Crruent Proffile </h3>
		<div class="text-center" style="margin-bottom: 10px;"><i class="fa fa-user fa-5x text text-primary"></i></div>
	<table class="table table-hover table-bordered table-striped">
			<tr><td>Username *:</td><td><?php echo $username;?></td></tr>
			<tr><td>Email *:</td><td><?php echo $email;?></td></tr>
			<tr><td>Password *:</td><td><?php echo $password;?></td></tr>
		</table>



	</div>
		</div><!-- note this is coontent area end -->
</div><!-- this is the end of row --> 
</div><!-- this is the end of container --> 

<!-- 	this is the end of side bars after top bar	 -->


<?php require_once('inc/footer.php'); ?>