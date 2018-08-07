<style type="text/css">
.radio_1{ font-size: 16px;
  font-weight: 400px;
  color: #000;
}
#color
{
  color: red;
}
input[type="radio"], input[type="checkbox"] {
  box-sizing: border-box;
  cursor: pointer;
  line-height: normal;
  margin: 3px 15px 0!important;
}

</style>
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="row">
          <br><br>
       <!--    <div class="col-sm-3 col-sm-6">
            <div class="information green_info">   
              <div class="information_inner">
                <div class="info green_symbols"><i class="fa fa-users icon"></i></div>
                <span>TODAY SALES </span>
                <h1 class="bolded">12,254K</h1>
                <div class="infoprogress_green">
                  <div class="greenprogress"></div>
                </div>
                <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                <div class="pull-right" id="work-progress1">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-3 col-sm-6">
            <div class="information blue_info">
              <div class="information_inner">
              <div class="info blue_symbols"><i class="fa fa-shopping-cart icon"></i></div>
                <span>TODAY FEEDBACK</span>
                <h1 class="bolded">12,254K</h1>
                <div class="infoprogress_blue">
                  <div class="blueprogress"></div>
                </div>
                <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                <div class="pull-right" id="work-progress2">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-6">
            <div class="information red_info">
              <div class="information_inner">
              <div class="info red_symbols"><i class="fa fa-comments icon"></i></div>
                <span>TODAY EARNINGS</span>
                <h1 class="bolded">12,254K</h1>
                <div class="infoprogress_red">
                  <div class="redprogress"></div>
                </div>
                <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                <div class="pull-right" id="work-progress3">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-sm-6">
           <div class="information gray_info">
              <div class="information_inner">
              <div class="info gray_symbols"><i class="fa fa-money icon"></i></div>
                <span>TODAY VISITS </span>
                <h1 class="bolded">12,254K</h1>
                <div class="infoprogress_gray">
                  <div class="grayprogress"></div>
                </div>
                <b class=""><small>Better than yesterday ( 7,5% )</small></b>
                <div class="pull-right" id="work-progress4">
                  <canvas style="display: inline-block; width: 47px; height: 25px; vertical-align: top;" width="47" height="25"></canvas>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-md-2"></div>
           <div class="col-md-8">
          <div class="block-web">
            <div class="header">
              <h3 class="content-header">Client Registration</h3>
            </div>
            <div class="porlets-content">
              <form action="<?php echo base_url();?>clientC/save_batch" method="post">
                <div class="form-group" >
                  <label>Client Name</label>
                  <input type="text" name="name" parsley-trigger="change"  placeholder="Enter Name" class="form-control"><span id="color"><?php  echo form_error('name'); ?></span>
                </div><!--/form-group-->
                <div class="form-group">
                  <label>Contact No</label>
                  <input type="phone"  name="contact" parsley-trigger="change"  placeholder="Enter Contact" class="form-control"><span id="color"><?php  echo form_error('contact'); ?></span>
                </div><!--/form-group-->
                <div class="form-group">
                  <label>Email</label>
                  <input parsley-equalto="#pass1" type="Email" name="email" placeholder="Enter Email"  class="form-control"><span id="color"><?php  echo form_error('email'); ?></span>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input parsley-equalto="#pass1" type="Password"  name="password" placeholder="Enter Password"  class="form-control"><span id="color"><?php  echo form_error('password'); ?></span>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input parsley-equalto="#pass1" type="text"  name="address" class="form-control" placeholder="Enter Address"><span id="color"><?php  echo form_error('address'); ?></span>
                </div>
                <div><input type="hidden" name="role" value="client"></div>
                <div class="form-group">
                  <div class="rdio rdio-primary">
                    <input type="radio" name="radio" value="normal"  checked="checked">
                    <label for="male2">Normal</label>
                    <input type="radio" name="radio" value="hot"  checked="checked">
                    <label for="male2">Hot</label>
                    <input type="radio" name="radio"  value="superhot">
                    <label for="female2">super hot</label>
                  </div>
                </div>
              </div>
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
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
        </span></div>
    </div>
  </div>
</nav>
<!-- /sidebar chats -->   



