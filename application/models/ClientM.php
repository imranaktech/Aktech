<?php

include_once('abstract_model.php');

class ClientM extends Abstract_model
{
	
    protected $table_name = "";
	
    public function __construct() 
	{
        $this->table_name = "client_meetings";
		    parent::__construct();
    }
    //ajax datatable
    	 var $table = "clients";  
      var $select_column = array("id", "client_name", "client_phone", "email","password","location","radio",);  
      var $order_column = array("id", "client_name", "client_phone", "email","password","location","radio");  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("client_name", $_POST["search"]["value"]);  
                $this->db->or_like("radio", $_POST["search"]["value"]);
                  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
     function make_datatables(){ 
     
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      }  


      function get_clients($limit=10,$offset=0,$searching='',$order_by,$order_column){
        
          $this->db->select('*');
        if($limit)
          $this->db->limit($limit);
        if($offset)
          $this->db->offset($offset);

        if(!empty($searching)){
          $this->db->like('client_name',$searching,'both');
          $this->db->or_like('client_phone',$searching,'both');
          $this->db->or_like('email',$searching,'both');
          $this->db->or_like('location',$searching,'both');
          $this->db->or_like('radio',$searching,'both');
        }

        $this->db->order_by($order_column,$order_by);

        return $this->db->from($this->table)->get()->result();
      }
      function get_total_clients(){
        return $this->db->count_all_results($this->table);
      }


}
/* End of file admins_model.php */
/* Location: ./application/models/admins_model.php */