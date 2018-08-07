<?php 
require_once('inc/top.php');
echo "<style>body{background: radial-gradient(circle,#45DAF9,#001D31);background-size:cover;color:white;}</style>";
?>
<?php 
if(isset($_POST['login'])){
  $g_username= mysqli_real_escape_string($con,strtolower($_POST['email']));
  $g_password= mysqli_real_escape_string($con,$_POST['password']);
  $SQL="SELECT * FROM admin WHERE username  = '$g_username' AND password = '$g_password'";
  $SQL_run=mysqli_query($con,$SQL);
  $chck = mysqli_num_rows($SQL_run);
  if($chck>0){

    $_SESSION['username'] = $g_username;
    if($_SESSION['username'])
    {
      header('location:index.php');
    }
   

  }else {

    $error_msg ='<b class="animated bounceIn">Wrong match of username or password</b>';
  }

  
}  // main if close here 
?>

    <form class="form-signin text-center" method="POST" style="width: 20%;margin: 15% auto;">
      <i class="fa fa-user fa-5x animated bounceIn"></i>
      <h1 class="h3 mb-3 font-weight-normal animated bounceIn">Admin Login</h1>
      <label for="inputEmail" class="sr-only">User Nmae</label>
      <input type="text" name="email" class="form-control" placeholder="Enter User Nmae" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
        <label>
          <?php if (isset($error_msg)) {
              echo ucfirst($error_msg);
          } ?>
        </label>
      <button class="btn btn-lg btn-primary btn-block animated bounceIn" type="submit" name="login">Login</button>
    </form>
    
  </body>
</html>
