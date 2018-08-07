
<script src="<?php echo base_url()?>assets/js/common-script.js"></script><!-- 
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.min.js"></script> -->
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
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/data-tables/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
 
 <script src="<?php echo base_url()?>assets/js/jPushMenu.js"></script> 
<script src="<?php echo base_url()?>assets/js/side-chats.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#mytable').dataTable( {
            processing: true,
            serverSide: true,
            Length:10,
            lengthMenu:[[10,25,50,0],[10,25,50,'All']],
            ajax: {
                url: "<?php echo base_url('Customer_relationship_officer/login_datatable'); ?>",
                method:"GET"
            },
            "columns": [
                {"data" : "customer_relationship_officer_name"},
                {"data" : "customer_relationship_officer_address"},
                {"data" : "customer_relationship_officer_email"},
                {"data" : "customer_relationship_officer_password"},
                {"data" : "customer_relationship_officer_gander"},
                {"data" : "customer_relationship_officer_image","render":function(data,type,row){
                  return '<img src="<?php echo base_url('images');  ?>/'+row.customer_relationship_officer_image+'" height="60px" width="60px" />';
                }},
                // {"data" : "customer_relationship_officer_city"},
                // {"data" : "customer_relationship_officer_phone"},
                {"data" : "customer_relationship_officer_id","render":function(data,type,row){
                  
                   var string = "<button class='btn btn-sm btn-danger' data-idx ='"+row.customer_relationship_officer_id+"'><i class='fa fa-trash fa-1x' data-toggle='tooltip' title='DELETE'></i>DELETE</button>";
                   return string;
                 }}
            ],
            columnDefs:[
            {'targets':4,orderable:false},
            {'targets':6,orderable:false},
            ]
 
        } );


    } );
</script>



</body>
</html>

