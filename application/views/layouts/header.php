<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ULTIMO Admin Dashboard Template</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />   -->
<link href="<?php echo base_url()?>assets/plugins/data-tables/DT_bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/plugins/advanced-datatable/css/demo_table.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/plugins/advanced-datatable/css/demo_page.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/admin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/plugins/kalendar/kalendar.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/scroll/nanoscroller.css">
<link href="<?php echo base_url()?>assets/plugins/morris/morris.css" rel="stylesheet" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color"></span> </div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"><i class="fa fa-repeat"></i></a> </li>
            <li class="dropdown"> <a data-toggle="dropdown" href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a>
      <ul class="drop_down_task dropdown-menu" style="margin-top:39px">
        <div class="top_left_pointer"></div>
        <li><div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember">
                    Remember me </label>
                </div></li>
        <li> <a href="help.html"><i class="fa fa-question-circle"></i> Help</a> </li>
        <li> <a href="settings.html"><i class="fa fa-cog"></i> Setting </a></li>
        <li> <a href="login.html"><i class="fa fa-power-off"></i> Logout</a> </li>
      </ul>
      </li>
          </ul>
        </div>
      </div>
      <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New Task</span> </a>
      <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
            <ul>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Tasks <span class="badge badge">8</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 7 pending tasks</p>
                  </li>
                  <li> <a href="task.html" class="task">
                    <div class="green_status task_height" style="width:80%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right green_label">80%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.html" class="task">
                    <div class="yellow_status task_height" style="width:50%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right yellow_label">50%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.html" class="task">
                    <div class="blue_status task_height" style="width:70%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right blue_label">70%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.html" class="task">
                    <div class="red_status task_height" style="width:85%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right red_label">85%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <span class="new"> <a href="task.html" class="pull_left">Create New</a> <a href="task.html" class="pull-right">View All</a> </span> </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Mail <span class="badge badge color_1">4</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 4 mails</p>
                  </li>
                      <li> <a href="readmail.html" class="mail"> <span class="photo"><img src="<?php base_url()?>assets/images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.html" class="mail"> <span class="photo"><img src="<?php base_url()?>assets/images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.html" class="mail red_color"> <span class="photo"><img src="<?php base_url()?>assets/images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.html" class="mail"> <span class="photo"><img src="<?php base_url()?>assets/images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
              
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> notification <span class="badge badge color_2">6</span> </a>
                <div class="notification_drop_down dropdown-menu">
                  <div class="top_pointer"></div>
                  <div class="box-content"> <a href="inbox.html"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a> </div>
                  <div class="box-content"> <a href="calendar.html"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                  <div class="box-content"> <a href="maps.html"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Map</span> </a> </div>
                  <div class="box-content"> <a href="todo.html"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a> </div>
                  <div class="box-content"> <a href="task.html"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tasks</span> </a> </div>
                  <div class="box-content"> <a href="timeline.html"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="<?php echo base_url()?>assets/images/user.png" /><span class="user_adminname">John Doe</span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="profile.html"><i class="fa fa-user"></i> Profile</a> </li>
            <li> <a href="help.html"><i class="fa fa-question-circle"></i> Help</a> </li>
            <li> <a href="settings.html"><i class="fa fa-cog"></i> Setting </a></li>
            <li> <a href="login.html"><i class="fa fa-power-off"></i> Logout</a> </li>
          </ul>
        </div>

        <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>
        
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
   <div class="inner">
    <!--\\\\\\\ inner start \\\\\\--><div class="left_nav">

      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="left_nav_slidebar">
        <ul>
          <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> CRO <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul class="opened" style="display:block">
              <li> <a href="<?php echo base_url('Customer_relationship_officer/add');?>"><span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Add</b> </a> </li>
              <li> <a href="<?php echo base_url('Customer_relationship_officer');?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Manage</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void();"> <i class="fa fa-edit"></i> CLIENT <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="<?php echo base_url('ClientC/insert')?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Add</b> </a> </li>
              <li> <a href="<?php echo base_url('ClientC/allclient');?>"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Manage</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> TASK <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="components.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Add</b> </a> </li>
              <li> <a href="validation.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Manage</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> DEAL <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="todo.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Add</b> </a> </li>
              <li> <a href="task.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Manage</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> MEETING <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="inbox.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Add</b> </a> </li>
              <li> <a href="compose.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>MAnage</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-folder-open-o"></i> REPORTS <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="login.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Add</b> </a> </li>
              <li> <a href="registration.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Manage</b> </a> </li>
            </ul>
          </li>
        </ul>
      </div>
      
    </div>
  </div>
</div>
    <!--\\\\\\\left_nav end \\\\\\-->
 