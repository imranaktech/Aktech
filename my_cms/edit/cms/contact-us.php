<?php require_once('inc/top.php');?>
  </head>
  <body>
<?php require_once('inc/header.php');?>
    
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1>Contact <span>Us</span></h1>
                <p>We are available 24x7. So Feel Free to Contact Us.</p>
            </div>
        </div>
        <img src="img/top-image.jpg" alt="Top Image">
    </div>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://addmap.net/'> </a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=64242ddc70ab36b043e34f5ba43601c16a0ff051'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(31.55460609999999,74.35715809999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.55460609999999,74.35715809999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Daroghwala Lahore,</strong><br>Office 6, St # 1, Hajipura, Salamat pura<br>54000 Lahore<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </div>
                        <div class="col-md-12 contact-form">
                           <h2>Contact Form</h2><hr>
                            <form action="">
                                <div class="form-group">
                                    <label for="full-name">Full Name*:</label>
                                    <input type="text" id="full-name" class="form-control" placeholder="Full Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email*:</label>
                                    <input type="text" id="email" class="form-control" placeholder="Email Address">
                                </div>
                                
                                <div class="form-group">
                                    <label for="website">Website:</label>
                                    <input type="text" id="website" class="form-control" placeholder="Website">
                                </div>
                                
                                <div class="form-group">
                                    <label for="message">Messages:</label>
                                    <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Your Message Should be Here"></textarea>
                                </div>
                                
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <?php require_once('inc/sidebar.php');?>                  
                </div>
            </div>
        </div>
    </section>
<?php require_once('inc/footer.php');?>