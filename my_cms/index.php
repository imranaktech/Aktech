<?php require_once('inc/header.php'); ?>
    
<?php require_once('inc/functions.php'); ?>



    <!-- this is the satrt of nav bar -->

<?php require_once('inc/nav.php'); ?>

    <!-- this is the end of nav bar  -->
    
    <!--    this is the start of  area after nav bar      -->
    <div class="jumbotron">
        <div class="container nine">
            <div id="details" class="animated fadeInLeft">
                <h1>Ali champ<span>Blog</span></h1>
                <p>This is an online Tutorial Huge Portal. So now Shine With Us</p>
            </div>
        </div>
        <img src="img/bg.jpg" alt="Top Image">
    </div>
    <!--    this is the end of area after nav bar     -->
    
    <section>
        <div class="container nine">
            <div class="row">
                <div class="col-md-8">
                    <!--       this is col-md-8 start           -->

                    <!--    this is carousel start     -->

                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="img/slider-img1.jpg" alt="Slider 1">
                          <div class="carousel-caption">
                            This is Heading for slider 1
                          </div>
                        </div>
                        <div class="item">
                          <img src="img/slider-img2.jpg" alt="Slider 2">
                          <div class="carousel-caption">
                            This is the Heading for slider 2
                          </div>
                        </div>
                        <div class="item">
                          <img src="img/slider-img3.jpg" alt="Slider 3">
                          <div class="carousel-caption">
                            This is the Heading for slider 3
                          </div>
                        </div>
                        <div class="item">
                          <img src="img/slider-img2.jpg" alt="Slider 4">
                          <div class="carousel-caption">
                            This is the Heading for slider 4
                          </div>
                        </div>
                      </div><!-- carousel inner -->

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <!--    this is carousel end     -->
                    <?php
                    
                    if(isset($_GET['search'])){
                        $search = $_GET['search-title'];
                        $query = "SELECT * FROM posts WHERE status = 'publish'";
                        $query .= " and tags LIKE '%$search%'";
                        $query .= " ORDER BY id DESC LIMIT $posts_start_from, $number_of_posts";
                    }
                    else{
                        $query = "SELECT * FROM posts WHERE status = 'publish'";
                        if(isset($cat_name)){
                            $query .= " and categories = '$cat_name'";
                        }
                        $query .= " ORDER BY id DESC LIMIT $posts_start_from, $number_of_posts";
                    }
                    $run = mysqli_query($con,$query);
                    if(mysqli_num_rows($run) > 0){
                        while($row = mysqli_fetch_array($run)) {
                            $id = $row['id'];
                            $now = $row['p_date'];
                            $date = date_create($now);
                            $my_day = date_format($date,"D");
                            $my_month = date_format($date,"F");
                            $my_year = date_format($date,"Y");
                            $title = $row['title'];
                            $author = $row['author'];
                            $author_image = $row['author_img'];
                            $categories = $row['categories'];
                            $tags = $row['tags'];
                            $post_data = $row['post_data'];
                            $views = $row['views'];
                            $status = $row['status'];
                            $image = $row['image'];
                    ?>
                    <div class="post">
                        <div class="row">
                            <div class="col-md-2 post-date">
                                <div class="day"><?php echo $my_day;?></div>
                                <div class="month"><?php echo $my_month; ?></div>
                                <div class="year"><?php echo $my_year; ?></div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="post.php?post_id=<?php echo $id;?>"><h2><?php echo $title;?></h2></a>
                                <p>Written by: <span><?php echo ucfirst($author);?></span></p>
                            </div>
                            <div class="col-md-2 profile-picture">
                                <img src="admin/img/auth/<?php echo $author_image;?>" alt="Profile Picture" class="img-circle">
                            </div>
                        </div>
                        <a href="post.php?post_id=<?php echo $id;?>"><img src="admin/img/post_cover/<?php echo $image;?>" alt="Post Image"></a>
                        <div class="desc">
                            <?php echo substr($post_data,0,300)."......";?>
                        </div>
                        <a href="post.php?post_id=<?php echo $id;?>" class="btn btn-primary">Read More</a>
                        <div class="bottom">
                            <span class="first"><i class="fa fa-folder"></i><a href="#"> <?php echo ucfirst($categories);?></a></span>|
                            <span class="sec"><i class="fa fa-comment"></i><a href="post.php?post_id=<?php echo $id;?>"> Comment</a></span>
                        </div>
                    </div>
                    <?php
                         }// end of while loop 
                    }// end of if condition
                    else{
                        echo "<center><h2>No Posts Available</h2></center>";
                    }
                    ?>
                    <!--    this is pagination start end     -->
                    
                    <nav id="pagination">
                      <ul class="pagination">
                        <?php
                          for($i = 1; $i <= $total_pages; $i++){
                              echo "<li class='".($page_id == $i ? 'active': ' ')."'><a href='index.php?page=".$i."&".(isset($cat_name)?"cat=$cat_id":" ")."'>$i</a></li>";
                          }
                          ?>
                      </ul>
                    </nav><!--    this is pagination end     -->

                </div><!--       this is col-md-8 end           -->
                
                    <!--       this is col-md-4 start     and start of side bar      -->
<div class="col-md-4">
                    <?php require_once('inc/side_bar.php'); ?>
</div>
                    <!--       this is col-md-4 end     and end of side bar      -->
                
            </div>
        </div>
    </section>


<!-- this is the footer start -->
<?php require_once('inc/footer.php'); ?>
<!-- this is the footer end -->