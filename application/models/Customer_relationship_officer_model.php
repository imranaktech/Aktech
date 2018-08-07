<?php

/** 
* RDA Admins Model 
*
* Model to manage Admins Table 
*
* @package 		Admin Pannel  
* @subpackage 	Model
* @author 		Muhammad Khalid<muhammad.khalid@pitb.gov.pk>  
* @link 		http://
*/

 include_once('Abstract_model.php');

class Customer_relationship_officer_model extends Abstract_model
{
	/**
	// * @var stirng
	// * @access protected
	*/
    protected $table_name = "";
	
	// * 
	// *  Model constructor
	// * 
	// * @access public 
	
    public function __construct() 
	{
        $this->table_name = "customer_relationship_officer";
		parent::__construct();
    }


  public function show_datatble($table)
  {
    $query = $this->db->get($table);
      return $query->result(); 
  } 

  public function count_data($table)
  {
    $this->db->select();
    $this->db->from($table);
    return $this->db->count_all_results();
  }


      public function show($table)
	{
		$query = $this->db->get($table);
    	return $query->result_array(); 
	}


}




/* End of file admins_model.php */
/* Location: ./application/models/admins_model.php */



?>