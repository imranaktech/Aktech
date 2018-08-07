<?php require_once('inc/header.php') ?>

    <!-- this is the satrt of nav bar -->

<?php require_once('inc/nav.php'); ?>

    <!-- this is the end of nav bar  -->
    
<?php require_once('inc/functions.php'); ?>

    <div class="jumbotron">
        <div class="container nine">
            <div id="details" class="animated fadeInLeft">
                <h1>Custom <span>Post</span></h1>
                <p>Here you can put your own tag line to make it more attractive</p>
            </div>
        </div>
        <img src="img/top-image.jpg" alt="Top Image">
    </div>
    
    <section>
        <div class="container nine">
            <div class="row">
                <div class="col-md-8">
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="day"><?php echo $my_day;?></div>
                                <div class="month"><?php echo $my_month;?></div>
                                <div class="year"><?php echo $my_year;?></div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="post.php?post_id=<?php echo $id;?>"><h2><?php echo $title;?></h2></a>
                                <p>Written by: <span><?php echo ucfirst($author);?></span></p>
                            </div>
                            <div class="col-md-2 profile-picture">
                                <img src="admin/img/auth/<?php echo $author_image;?>" alt="Profile Picture" class="img-circle">
                            </div>
                        </div>
                        <a href="admin/img/post_cover/<?php echo $image;?>"><img src="img/<?php echo $image;?>" alt="Post Image"></a>
                        <div class="desc">
                            <?php echo $post_data;?>
                        </div>
                        
                        <div class="bottom">
                            <span class="first"><i class="fa fa-folder"></i><a href="#"> <?php echo ucfirst($categories);?></a></span>|
                            <span class="sec"><i class="fa fa-comment"></i><a href="#"> Comment</a></span>
                        </div>
                    </div>
                    
                    <div class="related-posts">
                       <h3>Related Posts</h3><hr>
                        <div class="row">
                           <?php
                            $r_query = "SELECT * FROM posts WHERE status = 'publish' AND title LIKE '%$title%' LIMIT 3";
                            $r_run = mysqli_query($con,$r_query);
                            while($r_row = mysqli_fetch_array($r_run)){
                                $r_id = $r_row['id'];
                                $r_title = $r_row['title'];
                                $r_image = $r_row['image'];
                            ?>
                            <div class="col-sm-4">
                                <a href="post.php?post_id=<?php echo $r_id;?>">
                                    <img src="img/auth/<?php echo $r_image;?>" alt="Slider One">
                                    <h4><?php echo $r_title;?></h4>
                                </a>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    
                    <div class="author">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="img/<?php echo $author_image;?>" alt="Profile Image" class="img-circle">
                            </div>
                            <div class="col-sm-9">
                                <h4><?php echo ucfirst($author);?></h4>
                                <?php
                                $bio_query = "SELECT * FROM posts ";
                                $bio_run = mysqli_query($con, $bio_query);
                                if(mysqli_num_rows($bio_run) > 0){
                                    $bio_row = mysqli_fetch_array($bio_run);
                                    $author_details = $bio_row['about_author'];

                                ?>
                                <p><?php echo $author_details;?></p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="comment"> 

                        <?php if (isset($_GET['post_id'])) {
                            $id = $_GET['post_id'];
                                   $sql="SELECT * FROM comment WHERE post_id = '$id'; ";
                                    $run=mysqli_query($con,$sql);
                                
                                    while($row=mysqli_fetch_array($run)){
                                         $name=$row['name'];
                                         $message=$row['message'];

                                    }
                                 } ?>
                       <h3>Comments</h3><hr>
                        <div class="row single-comment">
                            <div class="col-sm-2">
                                <img src="img/unknown-picture.png" alt="Profile Picture" class="img-circle">
                            </div>
                            <div class="col-sm-10">
                                <h4><?php echo $name; ?></h4>
                                <p><?php echo $message; ?></p>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="comment-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php 
                                if(isset($_GET['post_id'])){

                                    $id = $_GET['post_id'];
                                if (isset($_POST['comment_btn'])) {
                                    
                                    $messsage=$_POST['comment'];
                                    $name=$_POST['full-name'];
                                    $website=$_POST['website'];
                                    $email=$_POST['email'];
                                    $sql="INSERT INTO comment(post_id,name,message,website,email) VALUES('$id','$name','$messsage','website','email')";
                                    $run=mysqli_query($con,$sql);
                                    // if($run){
                                    //     echo "Succussfully";
                                    // }
                                    

                                }} ?>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="full-name">Full Name:*</label>
                                        <input type="text"  name ="full-name" class="form-control" placeholder="Full Name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Email Address:*</label>
                                        <input type="email"  name ="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="website">Website:</label>
                                        <input type="text"  name ="website" class="form-control" placeholder="Website Url">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="comment">Comment:*</label>
                                        <textarea   name ="comment" cols="30" rows="10" placeholder="Your Comment Should be Here" class="form-control"></textarea>
                                    </div>
                                    
                                    <button type="submit" name="comment_btn" class="btn btn-primary" >Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <?php require_once('inc/side_bar.php'); ?>
                </div>
            </div>
        </div>
    </section>
<?php require_once('inc/footer.php') ?>