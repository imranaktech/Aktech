<?php require_once('inc/header.php');


if (isset($_GET['contact'])) {
    $name=$_GET['name'];
    $email=$_GET['email'];
    $website=$_GET['website'];
    $message=$_GET['message'];
    $consql="INSERT INTO contact(name,email,website,message) VALUES('$name','$email','$website','$message')";
    $conrun=mysqli_query($con,$consql);
    

}



 ?>
    
<?php require_once('inc/functions.php'); ?>

       <!-- this is the satrt of nav bar -->

<?php require_once('inc/nav.php'); ?>

    <!-- this is the end of nav bar  -->
    
    <div class="jumbotron">
        <div class="container nine">
            <div id="details" class="animated fadeInLeft">
                <h1>Contact <span>Us</span></h1>
                <p>We are available 24x7. So Feel Free to Contact Us.</p>
            </div>
        </div>
        <img src="img/top-image.jpg" alt="Top Image">
    </div>
    
    <section>
        <div class="container nine">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Wapda%20town%20near%20valencia%20town%20Lahore+(Ali%20champion)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><br />
                        </div>
                        <div class="col-md-12 contact-form">
                            
                           <h2>Contact Form</h2><hr>

                            <form action="" method="GET">
                                <div class="form-group">
                                    <label for="full-name">Full Name*:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Full Name"    required="required">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email*:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address"    required="required">
                                </div>
                                
                                <div class="form-group">
                                    <label for="website">Website:</label>
                                    <input type="text" name="website" class="form-control" placeholder="Website">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Messages:</label>
                                    <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Your Message Should be Here"     required="required"></textarea>
                                </div>
                                <?php if (isset($conrun)) {
                                    echo "<h4>Your Request Submitted</h4>";;
    } ?>
                                <button type="submit" name="contact"  class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                
                    <!--       this is col-md-4 start     and start of side bar      -->
<div class="col-md-4">
                    <?php require_once('inc/side_bar.php'); ?>
</div>
                    <!--       this is col-md-4 end     and end of side bar      -->
            </div>
        </div>
    </section>
<?php require_once('inc/footer.php') ?>