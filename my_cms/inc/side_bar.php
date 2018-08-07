<div class="widgets">
                       <div class="well">
                    <h4>Blog Search</h4>
                    <form class="input-group" metho="GET" action="index.php">
                          <input type="text" class="form-control" placeholder="Search for..." name="search-title">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="search"><i class="fa fa-search"></i></button>
                          </span>
                        </form><!-- /input-group -->

                 </div> <!-- /.input-group -->
                    </div><!--widgets close-->
                    
                    <div class="widgets">
                        <div class="popular">
                            <h4>Popular Posts</h4>
                            <?php 
                            $p_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY views DESC LIMIT 5";
                            $p_run = mysqli_query($con,$p_query);
                            if(mysqli_num_rows($p_run) > 0){
                                while($p_row = mysqli_fetch_array($p_run)){
                                    $p_id = $p_row['id'];
                                    $now = $row['p_date'];
                                    $date = date_create($now);
                                    $my_date = date_format($date,"D-F-Y");
                                    $p_title = $p_row['title'];
                                    $p_image = $p_row['image'];
                            ?>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="post.php?post_id=<?php echo $p_id;?>"><img src="img/<?php echo $p_image;?>" alt="Image 1"></a>
                                </div>
                                <div class="col-xs-8 details">
                                    <a href="post.php?post_id=<?php echo $p_id;?>"><h6><?php echo $p_title;?></h6></a>
                                    <p><i class="fa fa-clock-o"></i> <?php echo $my_date;?></p>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            else{
                                echo "<h3>No Post Available</h3>";
                            }
                            ?>
                            
                        </div>
                    </div><!--widgets close-->
                    
                    <div class="widgets">
                        <div class="popular">
                            <h4>Recent Posts</h4>
                            <?php 
                            $p_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC LIMIT 5";
                            $p_run = mysqli_query($con,$p_query);
                            if(mysqli_num_rows($p_run) > 0){
                                while($p_row = mysqli_fetch_array($p_run)){
                                    $p_id = $p_row['id'];
                                    $now = $row['p_date'];
                                    $date = date_create($now);
                                    $my_date = date_format($date,"D-F-Y");
                                    $p_title = $p_row['title'];
                                    $p_image = $p_row['image'];
                            ?>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="post.php?post_id=<?php echo $p_id;?>"><img src="img/<?php echo $p_image;?>" alt="Image 1"></a>
                                </div>
                                <div class="col-xs-8 details">
                                    <a href="post.php?post_id=<?php echo $p_id;?>"><h6><?php echo $p_title;?></h6></a>
                                    <p><i class="fa fa-clock-o"></i> <?php echo $my_date;?></p>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            else{
                                echo "<h3>No Post Available</h3>";
                            }
                            ?>
                            
                        </div>
                    </div><!--widgets close-->
                    
                    <div class="widgets">
                        <div class="popular">
                            <h4>Categories</h4>
                            <hr>
                            <div class="row">
                            <div class="col-xs-6">
                                <ul>
                                    <?php
                                    $c_query = "SELECT * FROM categories";
                                    $c_run = mysqli_query($con,$c_query);
                                    if(mysqli_num_rows($c_run) > 0){
                                        $count = 2;
                                        while($c_row = mysqli_fetch_array($c_run)){
                                            $c_id = $c_row['id'];
                                            $c_category = $c_row['category'];
                                            $count = $count + 1;
                                            
                                            if(($count % 2) == 1){
                                                echo "<li><a href='index.php?cat=".$c_id."'>".(ucfirst($c_category))."</a></li>";
                                            }
                                            
                                        }
                                    }
                                    else{
                                        echo "<p>No Category</p>";
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-xs-6">
                                <ul>
                                    <?php
                                    $c_query = "SELECT * FROM categories";
                                    $c_run = mysqli_query($con,$c_query);
                                    if(mysqli_num_rows($c_run) > 0){
                                        $count = 2;
                                        while($c_row = mysqli_fetch_array($c_run)){
                                            $c_id = $c_row['id'];
                                            $c_category = $c_row['category'];
                                            $count = $count + 1;
                                            
                                            if(($count % 2) == 0){
                                                echo "<li><a href='index.php?cat=".$c_id."'>".(ucfirst($c_category))."</a></li>";
                                            }
                                            
                                        }
                                    }
                                    else{
                                        echo "<p>No Category</p>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div><!--widgets close-->  