
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="row">
          <br><br>
          <div class="col-md-3"></div>
           <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <h3 class="content-header ">Customer Relationship Officer</h3>
            </div>
            <div class="porlets-content">
               <!--  <?php  // if($this->session->flashdata('error_message') != '')
                        {
                ?>
                    <div class="alert alert-danger">
                    <strong>Warning!</strong> <?php //echo $this->session->flashdata('error_message'); ?>
                    </div>
                <?php
                            
                        } 
                ?> -->
              <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Customer_relationship_officer/process_add') ?>">
                <div class="form-group form-md-line-input">
                  <label class="bold">Name</label>
                  <input type="text" name="cro_name"  placeholder="Enter Name" class="form-control">
                  <span style="color: red" <?php echo form_error('cro_name'); ?></span>
                </div>

                <div class="form-group form-md-line-input">
                  <label class="bold">Addreess</label>
                  <input type="text" name="cro_address"  placeholder="Enter Address" class="form-control"><span style="color: red"> <?php echo form_error('cro_address'); ?></span>

                </div>
                <div class="form-group form-md-line-input">
                  <label class="bold">Email</label>
                  <input type="text" name="cro_email" id="cro_email" placeholder="Email"  class="form-control">
                  <span style="color: red"> <?php echo form_error('cro_email'); ?></span>
                </div>
                <div class="form-group form-md-line-input">
                  <label class="bold">Password</label>
                  <input  type="Password" name="cro_password" id="cro_password"  class="form-control" placeholder="Password"><span style="color: red"> <?php echo form_error('cro_password'); ?></span>

                </div>
                <div class="form-group form-md-line-input">
                  <label>Gender</label>
                  <br>
                  <br>
                  <div class="col-md-12">
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                          <input type="radio" class="form-check-input" id="radio1" name="optradio" value="Male" checked>Male
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                          <input type="radio" class="form-check-input" id="radio2" name="optradio" value="Female">Female
                        </label>
                    </div>
                </div>
                 <div class="form-group form-md-line-input">
                  <label class="bold">Image</label>
                  <input  type="file" name="cro_image" id="cro_image" class="form-control">
                  <span style="color: red"> <?php echo form_error('cro_image'); ?></span>

                </div>
                 <div class="form-group form-md-line-input">
                  <label class="bold">City</label>
                  <input  type="text" name="cro_city" id="cro_city"  class="form-control" placeholder="City">
                  <span style="color: red"> <?php echo form_error('cro_city'); ?></span>

                </div>
                 <div class="form-group form-md-line-input">
                  <label class="bold">Phone</label>
                  <input  type="text" name="cro_phone" id="cro_phone"  class="form-control" placeholder="Phone">
                  <span style="color: red"> <?php echo form_error('cro_phone'); ?></span>

                </div>
                <button class="btn btn-primary" name="insert" id="insert" type="submit">Submit</button>
                <button class="btn btn-default">Cancel</button>
              </form>
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
          <div class="col-md-3"></div>
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body"> content </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
  <div class="header">
    <input type="text" class="form-control chat-search" placeholder=" Search">
  </div>
  <div href="#" class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>    </div>
    <div class="messages nano nscroller has-scrollbar">
      <div class="content" tabindex="0" style="right: -17px;">
        <ul class="conversation">
          <li class="odd">
            <p>Hi John, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I am also fine</p>
          </li>
          <li class="odd">
            <p>Tell me what about you?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
    </div>
  </div>
</nav>
<!-- /sidebar chats -->   














<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
  <div class="header">
    <input type="text" class="form-control chat-search" placeholder=" Search">
  </div>
  <div href="#" class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>    </div>
    <div class="messages nano nscroller has-scrollbar">
      <div class="content" tabindex="0" style="right: -17px;">
        <ul class="conversation">
          <li class="odd">
            <p>Hi John, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I am also fine</p>
          </li>
          <li class="odd">
            <p>Tell me what about you?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
    </div>
  </div>
</nav>
<!-- /sidebar chats -->   



