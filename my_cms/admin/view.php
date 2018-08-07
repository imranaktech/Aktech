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


		<div class="col-md-9" style="margin-bottom: 40px;"><!-- note this is coontent area start -->
			<h2><i class="fa fa-eye text text-primary "> Post View</i> <small> View Your Post</small></h2> <hr>
			<div class="breadcrumb">
				 <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer  text text-primary"></i>  <a href="index.Php"> Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-eye"></i> Post View
                                    </li>
                                </ol>
			</div><!-- braed crumb -->

					<?php 
							$id=$_GET['id'];
							$query="SELECT * FROM posts WHERE id='$id'";
							$run = mysqli_query($con,$query);
                      		$row = mysqli_fetch_array($run);
                            $db_id = $row['id'];
                            $now = $row['p_date'];
                            $date = date_create($now);
                            $my_day = date_format($date,"D");
                            $my_month = date_format($date,"F");
                            $my_year = date_format($date,"Y");
                            $title = ucfirst($row['title']);
                            $author = ucfirst($row['author']);
                            $author_image = $row['author_img'];
                            $categories = ucfirst($row['categories']);
                            $tags = $row['tags'];
                            $post_data = $row['post_data'];
                            $views = $row['views'];
                            $status = $row['status'];
                            $image = $row['image'];
                            echo "<div class='col-md-12 breadcrumb'>
                        <div class='row'>
                            <div class='col-md-2 post-date'>
                                <div class='day'>$my_day</div>
                                <div class='month'> $my_month</div>
                                <div class='year'> $my_year</div>
                            </div>
                            <div class='col-md-8 post-title'>
                                <a href='post.php?post_id=$id'><h2>$title</h2></a>
                                <p>Written by: <span> $author</span></p>
                            </div>
                            <div class='col-md-2 profile-picture'>
                                <img src='img/auth/$author_image' alt='Profile Picture' class='img-circle img-responsive' height='90px' width='90px' style='margin-top:15px;'>
                            </div>
                        </div>
                        <a href='post.php?post_id=$id'><img src='img/post_cover/$image' alt='Post Image' class='img-responsive'></a>
                        <div class='desc col-md-12'>
                            $post_data
                        </div>
                        <div class='bottom'>
                            <span class='first'><i class='fa fa-folder'></i><a href=''> $categories</a></span>
                        </div>
                        <div class='col-md-12'>

                   		<button class='btn btn-success pull-right' style='margin-left:10px;'><a href='update.php?id=$id'><i class='fa fa-pencil'></i> Update</button>
                   		<button class='btn btn-danger pull-right'><a href='delete.php?id=$id'><i class='fa fa-trash'></i> Delete</button>
                   	</div>
                    </div>";
                    ?>
                   	
		</div><!-- note this is coontent area end -->
</div><!-- this is the end of row --> 
</div><!-- this is the end of container --> 

<!-- 	this is the end of side bars after top bar	 -->


<?php require_once('inc/footer.php'); ?>