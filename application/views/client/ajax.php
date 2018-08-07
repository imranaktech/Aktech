<script src="<?php echo base_url()?>assets/js/jquery-2.1.0.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/common-script.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.sparkline.js"></script>
<script src="<?php echo base_url()?>assets/js/sparkline-chart.js"></script>
<script src="<?php echo base_url()?>assets/js/graph.js"></script>
<script src="<?php echo base_url()?>assets/js/edit-graph.js"></script>
<script src="<?php echo base_url()?>assets/plugins/kalendar/kalendar.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/kalendar/edit-kalendar.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/sparkline/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/plugins/sparkline/jquery.customSelect.min.js" ></script> 
<script src="<?php echo base_url()?>assets/plugins/sparkline/sparkline-chart.js"></script> 
<script src="<?php echo base_url()?>assets/plugins/sparkline/easy-pie-chart.js"></script>
<script src="<?php echo base_url()?>assets/plugins/morris/morris.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url()?>assets/plugins/morris/raphael-min.js" type="text/javascript"></script>  
<script src="<?php echo base_url()?>assets/plugins/morris/morris-script.js"></script> 
<script src="<?php echo base_url()?>assets/plugins/demo-slider/demo-slider.js"></script>
<script src="<?php echo base_url()?>assets/plugins/knob/jquery.knob.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/jPushMenu.js"></script> 
<script src="<?php echo base_url()?>assets/js/side-chats.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/scroll/jquery.nanoscroller.js"></script>
<!-- ////////////////////////////////////////////////// -->
<script src="<?php echo base_url()?>assets/js/jquery-2.1.0.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/jPushMenu.js"></script> 
<script src="<?php echo base_url()?>assets/js/side-chats.js"></script>
</body>
</html>
<script type="text/javascript" language="javascript">

 $(document).ready(function(){  
      var dataTable = $('#client_datatable').DataTable({  
           "bProcessing":true,  
           "bServerSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url('clientC/datatable'); ?>",  
                type:"POST"  
           },  
            "columns": [
            { "data": "client_name" },
            { "data": "client_phone" },
            { "data": "email" },
            { "data": "password" },
            { "data": "location" },
            { "data": "radio" },
             { "data": "client_id",render:function(id, type, row){
              return  '<button type="button" name="Mettings" id="'+row.client_id+'" class="btn btn-danger btn-xs">Mettings</button>';
            } },
            { "data": "client_id",render:function(id, type, row){
             return  '<button type="button" name="update" id="'+row.client_id+'" class="btn btn-warning btn-xs">Update</button>';
            } },
            { "data": "client_id",render:function(id, type, row){
              return  '<button type="button" name="delete" id="'+row.client_id+'" class="btn btn-danger btn-xs">Delete</button>';
            } }
            ]
      });  
 });  
 </script> 
 <script type="text/javascript">
   
 </script> 
