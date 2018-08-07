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
			<h2><i class="fa fa-envelope  text text-primary"> Contact Requests</i> <small>Users Intrusted toward you.</small></h2> <hr>
			<div class="breadcrumb">
				 <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-tachometer  text text-primary"></i>  <a href="index.Php">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-envelope"></i> Contact Request
                                    </li>
                                </ol>
                 
			</div><!-- braed crumb -->


<div class="col-md-10">
                           <h2 class="text text-primary">Peoples Contact Requests*:</h2><hr>

<?php 


 ?>
                            <table class="table table-hover table-striped ">
                <thead>
                    <tr class="table-bordered">
                        <td>sr #</td>
                        <td>Date & time</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Message</td>
                        <td>Aproove Request</td>
                        <td>Delete Request</td>
                    </tr>
                </thead>
                <tbody>
    <?php 

            $query="SELECT * FROM contact WHERE status='pending' ORDER BY id DESC";
            $query_run=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($query_run)){
            $date = date('y-m-d');
            $id = $row['id'];
            $message=$row['message'];
            $name=$row['name'];
            $email=$row['email'];

            echo "<tr>
                        <td>  $id </td>
                        <td>$date</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$message</td>
                        <td><button type='submit' name='edit' class='btn btn-success'><a href='show.php?cont=$id'><i class='fa fa-envelope-open'></i> Aproove </a></button></td>


                        <td><button type='submit' name='delete' class='btn btn-danger'><a href='delete.php?cr=$id'><i class='fa fa-trash'></i> Delete</a></button></td>
                    
            ";
        }

             ?>
                    
                    <!-- thi is the end of 1st row data -->

                </tbody>
            </table>
            <button class="btn btn-primary pull-right" style="margin-bottom:40px;"><a href="index.php">Bcak To Dashboard</a></button>
                        </div>


			
		</div><!-- note this is coontent area end -->
</div><!-- this is the end of row --> 
</div><!-- this is the end of container --> 

<!-- 	this is the end of side bars after top bar	 -->


<?php require_once('inc/footer.php'); ?>