
    <!--\\\\\\\ inner start \\\\\\-->
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="row">
          <br><br>
  
          <div class="col-md-2"></div>
           <div class="col-md-8">
          <div class="block-web">
            <div class="header">
              
              <h3 class="content-header">Arrange_Meeting</h3>
            </div>
            <div class="porlets-content">
              <?php echo validation_errors('<div class="text-danger" style="font-size: 15px">','</div>')?>
              <form action="<?php echo base_url('LoginCI/client_meeting');?>" method="POST">
                <div class="form-group">
                  <label>Client Name</label>
                  <input type="text" name="name" parsley-trigger="change"  placeholder="Enter Name " class="form-control">
                </div><!--/form-group-->
                <div class="form-group">
                  <label>Contact No</label>
                  <input type="phone" name="contact" parsley-trigger="change"  placeholder="Enter Contact" class="form-control">
                </div><!--/form-group-->
                <div class="form-group">
                  <label>Date</label>
                  <input id="pass1" type="date" name="date"  required class="form-control">
                </div><!--/form-group-->
                <div class="form-group">
                  <label>Timing</label>
                  <input parsley-equalto="#pass1" type="time" name="time"  class="form-control" required="form-control">
                </div><!--/form-group-->
                <div class="form-group">
                  <label>Location</label>
                  <input parsley-equalto="#pass1" type="text" name="location" placeholder="Location"  class="form-control">
                </div>
                <div class="form-group">
                  <label>Designation</label>
                  <input parsley-equalto="#pass1" type="text" name="designation"  class="form-control" placeholder="Designation">
                </div>
                <div><input type="hidden" name="role" value="CRO"></div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember">
                    Remember me </label>
                </div><!--/checkbox-->
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-default">Cancel</button>
              </form>
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
          <div class="col-md-2"></div>
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
      



