    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
      <div class="row">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> <a class="close-down" href="#"><i class="fa fa-times"></i></a> 
              </div>
              <h3 class="content-header"><?php echo $tittle?></h3>
            </div>
             <?php   if($this->session->flashdata('success_message') != '')
                        {
                ?>
                    <div class="alert alert-danger">
                    <strong>Succes</strong> <?php echo $this->session->flashdata('success_message'); ?>
                    </div>
                <?php
                            
                        } 
                ?>
                  <div class="porlets-content">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <a  href="<?php echo base_url('Customer_relationship_officer/add');?>" id="editable-sample_new" class="btn btn-primary">
                                      Add New <i class="fa fa-plus"></i>
                                  </a>
                              </div>
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="margin-top-10"></div>
                          <table class="table table-striped table-hover table-bordered" id="mytable">
                              <thead>
                              <tr>
                                  <th>Name</th>
                                  <th>Address</th>
                                  <th>Email</th>
                                  <th>Password</th>
                                  <th>Gender</th>
                                  <th>Image</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                          </table>
                      </div>
 
              </div><!--/porlets-content-->  
            </div><!--/block-web--> 
          </div><!--/col-md-12-->
        </div>
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->

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

