<?php 
/**
 * 
 */
class Customer_relationship_officer extends CI_Controller
{
		public function __construct()
	{
	    parent::__construct();
		$this->load->model('Customer_relationship_officer_model','cro');
		$this->load->library('image_lib');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data["tittle"] = "Customers relationship officer";   
		$this->load->view('layout/header');
		$this->load->view('CRO/datatabe_show',$data);
		$this->load->view('CRO/mylayout/myfooter');
	}

	public function add1()
	{
		$data = array();
        $data['customer_relationship_officer'] = $this->cro->show('customer_relationship_officer');
        $this->load->view('layout/header');
		$this->load->view('CRO/index',$data);
		$this->load->view('layout/footer');
	}
	


	public function login_datatable()
	{

		$draw = intval($this->input->get('draw'));
		$start = intval($this->input->get('start'));
		$length = intval($this->input->get('length'));
		$search=$this->input->get('search');
		$order=$this->input->get('order');
		$columns=$this->input->get('columns');
		$start = $start?$start+1:$start;


		if($length)
			$this->db->limit($length);
			$this->db->offset($start);

		if(isset($search['value']) && !empty($search['value']))
		{
			$value = $search['value'];

			$this->db->like('customer_relationship_officer_name',$value,'match');
			$this->db->or_like('customer_relationship_officer_address',$value,'match');
			$this->db->or_like('customer_relationship_officer_email',$value,'match');
			$this->db->or_like('customer_relationship_officer_password',$value,'match');
			$this->db->or_like('customer_relationship_officer_gander',$value,'match');
			$this->db->or_like('customer_relationship_officer_city',$value,'match');
			$this->db->or_like('customer_relationship_officer_phone',$value,'match');
		}

		if(isset($order[0]['column'])){
			$order_column=$order[0]['column'];
			$order_dir = $order[0]['dir'];
			$column_name = $columns[$order_column]['data'];
			$this->db->order_by($column_name,$order_dir);
		}

		$show_table = $this->cro->show_datatble('customer_relationship_officer');
		$total_data=$this->cro->count_data('customer_relationship_officer');



		$response['draw']= $draw;
		$response['recordsTotal']= $total_data;
		$response['recordsFiltered'] = count($show_table);
		$response['data']=$show_table;
		echo json_encode($response);
		exit;
	}

	public function add()
	{
		$this->load->view('layout/header');
		$this->load->view('CRO/add');
		$this->load->view('layout/footer');
	}

	public function img_insert()
	{
		
			$config['upload_path']='./images/';
			$config['allowed_types']='gif|jpg|png';
			$config['max_size'] = '100';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

			$this->load->library('upload',$config);
			$this->upload->do_upload('cro_image');
			$data = $this->upload->data();
			if($data)
			{
				$image = $data['file_name'];
				return $image;

			}

	}

	public function process_add()
    {
    	if($_FILES)
		{
			$image = $this->img_insert();
			// $new = $image;
		}
			$this->form_validation->set_rules('cro_name','Name','required');
			$this->form_validation->set_rules('cro_address','ADDRESS','required');
			$this->form_validation->set_rules('cro_email','EMAIL','required');
			$this->form_validation->set_rules('cro_password','PASSWORD','required');
			$this->form_validation->set_rules('optradio','GENDER','required');
			$this->form_validation->set_rules('cro_image','Image','required');
			$this->form_validation->set_rules('cro_city','CITY','required');
			$this->form_validation->set_rules('cro_phone','PHOME','required');
			if ($this->form_validation->run() == False )
			{
				$this->session->set_flashdata('error_message', 'Error occured while saving CRO.');
	      		$this->add();
    		}
    		else 
    	    {
    	    	   $cro_name = $this->input->post('cro_name');
			        $cro_address =$this->input->post('cro_address');
			        $cro_email =$this->input->post('cro_email');
			        $cro_password =$this->input->post('cro_password');
			        $gender =$this->input->post('optradio');
			        $cro_city =$this->input->post('cro_city');
			        $cro_phone =$this->input->post('cro_phone');

			        $data = array(
			                    'customer_relationship_officer_name' => $cro_name,
			                    'customer_relationship_officer_address' => $cro_address,
			                    'customer_relationship_officer_email' => $cro_email,
			                    'customer_relationship_officer_password' => $cro_password,
			                    'customer_relationship_officer_gander' => $gender,
			                    'customer_relationship_officer_image' => $image,
			                    'customer_relationship_officer_city' => $cro_city,
			                    'customer_relationship_officer_phone' => $cro_phone,
			                    
			                    ); 

			        $this->cro->save($data);
			        $this->session->set_flashdata('success_message', 'CRO inserted.');
	              	redirect('Customer_relationship_officer/index');
	      	}	
		}





    
}

?>