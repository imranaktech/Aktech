<?php
                    }
                    if(isset($_POST['search'])){
                        $search = $_POST['search-title'];
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
                            $author_image = $row['author_image'];
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
                                <div class="month"><?php echo $my_month;?></div>
                                <div class="year"><?php echo $my_year;?></div>
                            </div>
                            <div class="col-md-8 post-title">
                                <a href="post.php?post_id=<?php echo $id;?>"><h2><?php echo $title;?></h2></a>
                                <p>Written by: <span><?php echo ucfirst($author);?></span></p>
                            </div>
                            <div class="col-md-2 profile-picture">
                                <img src="img/<?php echo $author_image;?>" alt="Profile Picture" class="img-circle">
                            </div>
                        </div>
                        <a href="post.php?post_id=<?php echo $id;?>"><img src="img/<?php echo $image;?>" alt="Post Image" ></a>
                        <div class="desc">
                            <?php echo substr($post_data,0,300)."......";?>
                        </div>
                        <a href="post.php?post_id=<?php echo $id;?>" class="btn btn-primary">Read More</a>
                        <div class="bottom">
                            <span class="first"><i class="fa fa-folder"></i><a href="#"> <?php echo ucfirst($categories);?></a></span>|
                            <span class="sec"><i class="fa fa-comment"></i><a href="#"> Comment</a></span>
                        </div>
                    </div>
                    <?php
                         }// end of while loop 
                    }// end of if condition
                    else{
                        echo "<center><h2>No Posts Available</h2></center>";
                    }
                    ?>