<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClientC extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('ClientM');
		$this->load->library('form_validation');
	}
	public function insert()
	{
		$this->load->view('layout/header');
		$this->load->view('client/client');
		$this->load->view('layout/footer');
	}
	public function save_batch()
	{
		$this->form_validation->set_rules('name','Name','required|alpha');
		$this->form_validation->set_rules('contact','contact','required');
		$this->form_validation->set_rules('email','Mail','required|valid_email|is_unique[clients.email]');
        $this->form_validation->set_rules('password','password','trim|required|min_length[2]|max_length[20]');
        $this->form_validation->set_rules('address','address','required');
        if ($this->form_validation->run()==false) 
		{
			$this->insert();
		}
		else
		{
		$data = array(
			'client_name'   =>$this->input->post('name'),
			'client_phone'  =>$this->input->post('contact'),
			'email'         =>$this->input->post('email'),
			'password'      =>$this->input->post('password'),
			'location'      =>$this->input->post('address'),
			'radio'         =>$this->input->post('radio'),
			'role'         =>$this->input->post('role'),
		);
		$save = $this->ClientM->save($data);
		$this->allclient();
	    }
	}
	//
	public function allclient()
	{
		$this->load->view('layout/header');
		$this->load->view('client/allclient');
		$this->load->view('client/ajax');
	}
	
	//datatable to show all client
	public function datatable()
	{
		$start = $this->input->post('start');
		$length = $this->input->post('length');
		$search = $this->input->post('search');
		$order = $this->input->post('order');
		$draw = $this->input->post('draw');
		$columns = $this->input->post('columns');

		$offset = 0;
		if(!$start)
			$offset = $start+1;	

		$searching = '';
		if(isset($search['value']))
			$searching = trim($search['value']);
		$order_by = 'desc';
		$order_column = 'client_id';
		if(isset($order[0]['column']))
		{
			$column_number = $order[0]['column'];
			$order_by = $order[0]['dir'];
			$order_column = $columns[$column_number]['data'];
		}

		$clients = $this->ClientM->get_clients($length,$offset,$searching,$order_by,$order_column); 

		//echo $this->db->last_query();exit;
		$total_clients = $this->ClientM->get_total_clients(); 
		$output = array(  
			"draw"             => intval($draw),  
			"recordsTotal"     => count($clients),  
			"recordsFiltered"  => $total_clients,  
			"data"             => $clients  
		);  
		echo json_encode($output);  
	}
}
?>	