<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ULTIMO Admin Dashboard Template</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" >
<script src="<?php echo base_url()?>assets/js/jquery-2.1.0.js"></script> 
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="login_page">
  <div class="login_content" style="width: 28%!important; padding: 12px!important;">
  <div class="panel-heading border login_heading">sign in now</div>	
  <?php echo validation_errors('<div class="text-danger" style="font-size: 15px">','</div>')?>

  <?php
 if($this->session->flashdata('message'))
 {
  ?>
  <div class="text-danger" style="font-size: 15px">
  <strong>Alert:</strong><?php echo $this->session->flashdata('message')?>
  </div>
  <?php 
 }
  ?>
 <form  id="Sign_up" method="post" action="<?php echo base_url('LoginCI/login')?>">

      <div class="form-group">
        
        <div class="col-sm-7">
          <td><input type="email" name="email"  placeholder="Email"  class="form-control" id="email_error"></td>   
        </div>
        <div class="col-sm-5"><td><span class="error_form" id="email_error_message" style="color:red;    font-weight: 500;"></span></td></div>
      </div>
      <div class="form-group">
        <div class="col-sm-7">
          <i class="fas fa-eye" id="eye" onclick="show()" style="position:relative;left:80px;top: 22px;font-size: 16px   "></i>
          <input type="password" name="password" placeholder="Password" id="password" class="form-control">
        </div>

         <div class="col-sm-5">
          <br>

          <td>
            <span class="error_form" id="password_error_message" style="color:red;    font-weight: 500;">          </span>
          </td>
        </div>
      </div>
      <div class="form-group" >
        <div class="col-sm-7">
           <div class="checkbox checkbox_margin" style="padding-left: 0px!important">
        <label style="font-size: 13px;margin-right:200px;margin-top:10px;color: #091282; font-weight: bold; ">Status</label><br>
        <input type="radio" name="gender" value="Admin" id="radio_value"> <span style="margin-right: 10px;">  Admin </span>

        <input type="radio" name="gender" value="Client" id="radio_value"><span style="margin-right: 10px;">  Client</span> 

         <input type="radio" name="gender" value="Cro" id="radio_value"> <span style="margin-right: 10px;">  Cro</span>
      </div>
      </div>
      <span class="error_form" id="password_error_message" style="color:red;    font-weight: 500;">  
    </div>
      <div class="form-group">
        <div class=" col-sm-7">
         
            <label class="lable_margin">
              <input type="checkbox"><p class="pull-right"> Remember me</p></label>
              <a href="index.html">
              <button class="btn btn-default pull-right" type="submit" >Sign in</button>
              </a>
        </div>
        <div class="col-sm-5"></div>
      </div>
      <div><a href="<?php echo base_url('LoginCI/forgetpassword_load')?>" style="text-decoration: none;margin-left: 150px">Forget Password</div>
        
    </form>
  
 </div>
  </div>
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
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body"> sgxdfgxfg </div>
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

</body>
</html>


