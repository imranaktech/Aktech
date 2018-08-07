<?php 
/** 
* SBP Admins Model 
*
* Model to manage admins/users table 
*
* @package 		Admin Pannel Authentication 
* @subpackage 	Model
* @author 		Muhammad Khalid<muhammad.khalid@pitb.gov.pk>  
* @link 		http://punjabsportsboard.com
*/
include_once('abstract_model.php');

class Admin_model extends Abstract_model {

    protected $table_name = "";
	protected $is_error;
	public $admin_exists;
	public $admin_salt;
	public $admin_info;

	//Model Constructor
    function __construct() {
        $this->table_name = "admins";
		parent::__construct();
    }
 //    public function admin_login($admin_email, $password)
	// {
	// 	// $this->IsAdmin(0, $admin_email);
	// 	//print_r($this->admin_info);
	// 	//echo $this->admin_password_crypt($password,$this->admin_info). ":" . $this->admin_info[0]['admin_password'];
	// 	if( !$this->admin_exists )
	// 	{
	// 		$this->is_error = 2;
	// 	}
	// 	elseif( !$this->admin_info[0]['admin_enabled'] )
	// 	{
	// 		$this->is_error = 3;
	// 	}
	// 	elseif( $this->admin_password_crypt($password, $this->admin_info) != $this->admin_info[0]['admin_password'] )
	// 	{
	// 		$this->is_error = 4;
	// 	}
	// 	else
	// 	{
	// 		$this->is_error = 0;
	// 	}
	// 	return array('error'=>$this->is_error,'admin_info'=>$this->admin_info[0]);
	// }
	public function admin_login($admin_email, $password,$status)
	{
		$this->db->select();
		$this->db->from($this->table_name);
		$this->db->where('admin_email',$admin_email);
		$this->db->where('admin_password',$password);
		$this->db->where('role',$status);
		return $this->db->get();
	}
	public  function  comparemail($email)
	{
		$this->db->where('admin_email', $email);  
           $query = $this->db->get($this->table_name);  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
             
	} 
	
}
?>