<?php require_once('inc/top.php'); 
 if(!isset($_SESSION['username']))
  {
    header('location:login.php');
  }
  ?>

</head>
<body>
<!--  this is the satrt of side bars after top bar   -->

<div class="container-fluid"">
  <div class="row">
<?php require_once('inc/nav.php') ?>

    <div class="col-md-3"><!-- note this is side bar satrt -->
      <?php require_once('inc/side.php') ?>
    </div><!-- note this is side bar end -->




    <div class="col-md-9"><!-- note this is coontent area start -->
      <h2><i class="fa fa-folder-open"></i> Ctegories <small>Diffrent Ctegories</small></h2> <hr>
      <div class="breadcrumb">
         <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer"></i>  <a href="index.Php">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-folder-open"></i> Ctegories
                                    </li>
                                </ol>
      </div><!-- braed crumb -->

          <div class="row"> <!-- start of row -->
          
            <div class="col-md-12">
              <div class="col-md-6">

                <?php   
if(isset($_GET['id'])){
  $id=$_GET['id'];
  if (isset($_POST['ad_cat'])) {
  $n_cat=$_POST['n_cat'];
  $sql="UPDATE categories SET category='$n_cat' WHERE id='$id'";
  $run=mysqli_query($con,$sql);
  $msg="Category upadated Successfully";
  // if(isset($run)){
  //   header('location:category.php');
  //   $upadated="HELLO World categoruy";
  // }
}
}
$db="SELECT * FROM categories WHERE id ='$id'";
      $db_run=mysqli_query($con,$db);
      $row=mysqli_fetch_array($db_run);
      $category=$row['category'];
 ?>
              <form action="" method="POST">
                <div class="form-group">
                <label for="category">Enter Category Name:</label>
                <input type="text" name="n_cat" placeholder="Enter category name you want to add." value="<?php echo $category ?>" class="form-control" required="required">
              </div><!-- form group end -->
              <button type="submit" name="ad_cat" class="btn btn-primary"> Update Ctegory Now <i class="fa fa-arrow-circle-right"></i></button>
              </form>
            </div> <!-- this is the end of col-md-8 -->

 <div class="col-md-6">
              <table class="table table-bordered table-hover table-striped">
                <tr><td><h4 class="text text-primary">Current name of category</h4></td></tr>
                <tr><td><?php echo $category; ?></td></tr>
                <?php if (isset($msg)) {
                 echo" <tr class='text text-success'><td>$msg</td></tr>";}  ?>
              </table>
            </div> 
            </div><!-- this is the end of col-md-7 -->
          </div><!-- thi is the end of row -->
    </div><!-- note this is coontent area end -->
</div><!-- this is the end of row --> 
</div><!-- this is the end of container --> 

<!--  this is the end of side bars after top bar   -->
<?php require_once('inc/footer.php') ?>