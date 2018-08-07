<?php require_once('inc/header.php');

      
      $number_of_posts = 5;
      
      if(isset($_GET['page'])){
          $page_id = $_GET['page'];
      }
      else{
          $page_id = 1;
      }
      
      if(isset($_GET['cat'])){
          $cat_id = $_GET['cat'];
          $cat_query = "SELECT * FROM categories WHERE id = $cat_id";
          $cat_run = mysqli_query($con, $cat_query);
          $cat_row = mysqli_fetch_array($cat_run);
          $cat_name = $cat_row['category'];
      }
      
      
      if(isset($_GET['search'])){
          $search = $_GET['search-title'];
          $all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
          $all_posts_query .= " and tags LIKE '%$search%'";
          $all_posts_run = mysqli_query($con, $all_posts_query);
          $all_posts = mysqli_num_rows($all_posts_run);
          $total_pages = ceil($all_posts / $number_of_posts);
          $posts_start_from = ($page_id - 1) * $number_of_posts;
      }
      else{
          $all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
          if(isset($cat_name)){
              $all_posts_query .= " and categories = '$cat_name'";
          }
          $all_posts_run = mysqli_query($con, $all_posts_query);
          $all_posts = mysqli_num_rows($all_posts_run);
          $total_pages = ceil($all_posts / $number_of_posts);
          $posts_start_from = ($page_id - 1) * $number_of_posts;
      }
      
?>


<!-- this is the start of post_description page  -->

<?php
if(isset($_GET['post_id'])){
    $post_id = $_GET['post_id'];
    
    $views_query = "UPDATE `posts` SET `views` = views + 1 WHERE `posts`.`id` = $post_id";
    mysqli_query($con, $views_query);
    
    $query = "SELECT * FROM posts WHERE status = 'publish' and id = $post_id";
    $run = mysqli_query($con, $query);
    if(mysqli_num_rows($run) > 0){
        $row = mysqli_fetch_array($run);
                        $id = $row['id'];
                          $now = $row['p_date'];
                            $date = date_create($now);
                            $my_day = date_format($date,"D");
                            $my_month = date_format($date,"F");
                            $my_year = date_format($date,"Y");
                        $title = $row['title'];
                        $image = $row['image'];
                        $author_image = $row['author_img'];
                        $author = $row['author'];
                        $categories = $row['categories'];
                        $post_data = $row['post_data'];
                    }
    else{
        header('Location: index.php');
    }
}      
?>

<!-- this is the end of post_description page  -->





<!-- this is the code for login form -->

<?php 

if(isset($_GET['login'])){
  $g_username= $_GET['email'];
  $g_password= $_GET['password'];
  $SQL="SELECT * FROM user WHERE id='1'";
  $SQL_run=mysqli_query($con,$SQL);
  $SQL_row=mysqli_fetch_array($SQL_run);
  $username= $SQL_row['username'];
  $password= $SQL_row['password'];
  $error_msg="<b class='txt-danger bg-danger'>Please check that you type your email or password corectly</b>";
  if ($g_username=$username and  $g_password=$password) {
    header('Location:index.php');
  } /// nsested if close here 
else{
  header('Location:login.php');
  echo ucfirst($error_msg);
}  // else close here
}  // main if close here 



 ?>

