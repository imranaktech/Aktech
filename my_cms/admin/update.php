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
			<h2><i class="fa fa-pencil text text-primary "> Update post</i> <small>Update post to make it correct</small></h2> <hr>
			<div class="breadcrumb">
				 <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer text text-primary"></i>  <a href="index.Php">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-pencil"></i> Update post
                                    </li>
                                </ol>
			</div><!-- braed crumb -->

<?php
  $id=$_GET['id'];
  $d_sql="SELECT * FROM posts WHERE id ='$id'";
  $d_run=mysqli_query($con,$d_sql);
  $row=mysqli_fetch_array($d_run);
  $tittle=$row['title'];
  $author_name=$row['author'];
  $author_img=$row['author_img'];
  $post_image=$row['image'];
  $categories=$row['categories'];
  $tags=$row['tags'];
  $post_data=$row['post_data'];
  $about_author=$row['about_author'];

if(isset($_POST['update'])){
  $p_tittle=$_POST['p_tittle'];
  $p_tags=$_POST['p_tags'];
  $p_cat=$_POST['p_cat'];
  $p_auth=$_POST['p_auth'];
  $about_p_auth=$_POST['about_p_auth'];
  $p_desc=$_POST['p_desc'];

  $name = $_FILES['auth_img']['name'];
  $tmp_name = $_FILES['auth_img']['tmp_name'];
  move_uploaded_file($tmp_name,'img/auth/'.$name);


  $img = $_FILES['p_img']['name'];
  $f_name = $_FILES['p_img']['tmp_name'];
  move_uploaded_file($f_name,'img/post_cover/'.$img);
  


 

  $date = date('y-m-d');
  $sql="UPDATE posts SET title='$p_tittle', tags ='$p_tags',categories='$p_cat',author='$p_auth',about_author='$about_p_auth',post_data='$p_desc',image='$img' , author_img = '$name' WHERE id='$id' ";
  $run=mysqli_query($con,$sql);
  if($run){
    header('location:all_post.php');
  }
}

  ?>
                          <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="full-name">Post Tittle*:</label>
                                    <input type="text" name="p_tittle" class="form-control" placeholder="Post Tittle" value="<?php echo $tittle;?>"required="required">
                                </div>
                                <div class="form-group">
                                    <label for="full-name">Post Tags*:</label>
                                    <input type="text" name="p_tags" class="form-control" placeholder="Enter Tags" value="<?php echo $tags;?>"required="required">
                                </div>
                                <div class="form-group">
                                    <label for="full-name">Post Category*:</label>
                                    <input type="text" name="p_cat" class="form-control" placeholder="Enter Post Category" value="<?php echo $categories;?>"required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email">Post Author*:</label>
                                    <input type="text" name="p_auth" class="form-control" placeholder="Who is Post Author?" value="<?php echo $author_name;?>"required="required">
                                </div>
                                
                                <div class="form-group">
                                    <label for="website">About Post Author *:</label>
                                    <input type="text" name="about_p_auth" class="form-control" placeholder="About Post Author" value="<?php echo $about_author;?>"required="required">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Post Description*:</label>
                                    <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Post Description or details Should be Here" style="resize: none;" name="p_desc" required="required"><?php echo $post_data;?></textarea>
                                </div>
                                <div class="row">
                                <div class="col-md-6 pull-left">
                                  <div class="col-md-4 text text-primary">
                                    <h4>Current image</h4>
                                    <img src="img/post_cover/<?php echo $post_image; ?>" class="img-responsive">
                                  </div>
                                  <label class="text text-danger lg">Choose File For Post</label>

                                  <input  type="file" placeholder="Click To Enter post image" name="p_img" required="required">
                                </div>

                                
                                <div class="col-md-6 pull-right">
                                  <div class="col-md-4 text text-primary">
                                  <h4>Current image</h4>
                                    <img src="img/auth/<?php echo $author_img;?>" class="img-responsive" height="50px" width="50px">
                                  </div>
                                  <label class="text text-danger lg">Choose Image For author</label>
                                  <input  type="file" placeholder="Click To Enter post image" name="auth_img" required="required">
                                </div>
                                </div>
                               
                                <input type="submit" name="update" value="Update" class="btn btn-primary pull-right" style="margin-bottom: 70px;">
                            </form>




			
		</div><!-- note this is coontent area end -->

</div><!-- this is the end of row --> 
</div><!-- this is the end of container --> 

<!-- 	this is the end of side bars after top bar	 -->


<?php require_once('inc/footer.php'); ?>