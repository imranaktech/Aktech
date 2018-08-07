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
			<h2><i class="fa fa-plus-square  text text-primary"> New Post</i> <small>Make new post</small></h2> <hr>
			<div class="breadcrumb">
				 <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer  text text-primary"></i>  <a href="index.Php">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-plus-square"></i> New Post
                                    </li>
                                </ol>
                 
			</div><!-- braed crumb -->


<div class="col-md-12 ">
                           <h2 class="text text-primary">Ad New Post Now*:</h2><hr>

<?php 

if (isset($_POST['upload'])) {
	$p_tittle=$_POST['p_tittle'];
	$p_tags=$_POST['p_tags'];
	$p_cat=$_POST['p_cat'];
	$p_auth=$_POST['p_auth'];
	$about_p_auth=$_POST['about_p_auth'];
 	$p_desc=$_POST['p_desc'];
	$p_img=$_POST['p_img'];
	$auth_img=$_POST['auth_img'];
	$date = date('y-m-d');
  $name = $_FILES['auth_img']['name'];
  $tmp_name = $_FILES['auth_img']['tmp_name'];
  move_uploaded_file($tmp_name,'img/auth/'.$name);


  $img = $_FILES['p_img']['name'];
  $f_name = $_FILES['p_img']['tmp_name'];
  move_uploaded_file($f_name,'img/post_cover/'.$img);

	$sql="INSERT INTO posts(title,tags,categories,author,about_author,post_data,image,author_img,p_date) VALUES('$p_tittle','$p_tags','$p_cat','$p_auth','$about_p_auth','$p_desc','$img','$name','$date')";
	$run=mysqli_query($con,$sql);
    if ($run) {
         header('location:all_post.php');
    }
   

}

 ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="full-name">Post Tittle*:</label>
                                    <input type="text" name="p_tittle" class="form-control" placeholder="Post Tittle" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="full-name">Post Tags*:</label>
                                    <input type="text" name="p_tags" class="form-control" placeholder="Enter Tags" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="full-name">Post Category*:</label>
                                    <input type="text" name="p_cat" class="form-control" placeholder="Enter Post Category" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email">Post Author*:</label>
                                    <input type="text" name="p_auth" class="form-control" placeholder="Who is Post Author?" required="required">
                                </div>
                                
                                <div class="form-group">
                                    <label for="website">About Post Author *:</label>
                                    <input type="text" name="about_p_auth" class="form-control" placeholder="About Post Author" required="required">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Post Description*:</label>
                                    <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Post Description or detsil  Should be Here" style="resize: none;" name="p_desc" required="required"></textarea>
                                </div>
                                <div class="row">
                                <div class="col-md-6 pull-left">
                                	<label class="text text-danger lg">Choose File For Post</label>
                                	<input  type="file" placeholder="Click To Enter post image" name="p_img" required="required" />
                                </div>
                                <div class="col-md-6 pull-right ">
                                	<label class="text text-danger lg">Choose Image For author</label>
                                	<input  type="file" placeholder="Click To Enter post image" name="auth_img" required="required" />
                                </div>
                                </div>
                               
                                <input type="submit" name="upload" value="Upload" class="btn btn-primary pull-right" style="margin-bottom: 70px;">
                            </form>
                        </div>


			
		</div><!-- note this is coontent area end -->
</div><!-- this is the end of row --> 
</div><!-- this is the end of container --> 

<!-- 	this is the end of side bars after top bar	 -->


<?php require_once('inc/footer.php'); ?>