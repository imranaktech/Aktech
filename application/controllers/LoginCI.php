<?php 

class LoginCI extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->layout = "admin/dashboard";
		$this->load->model('Admin_model');
		$this->load->model('ClientM');
	}
	public function index()
	{
		 $this->load->view('index');
	}
	public function pak()
	{
		$this->layout = "";
		$this->load->view('Login/login');
	}
	public function jquery_load()
	{
      $this->load->view('jquery');
	}
	public function client_meeting()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('contact','Contact','required');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('designation','Designation','required');
		if($this->form_validation->run()==false)
		{
			$this->index();
		}
		else
		{
			$data = array(
				'client_meeting_name' =>         $this->input->post('name'),
				'client_meeting_phone' =>        $this->input->post('contact'),
				'client_meeting_date' =>         $this->input->post('date'),
				'client_meeting_time' =>         $this->input->post('time'),
				'client_meeting_location' =>     $this->input->post('location'),
				'client_meeting_designation' =>  $this->input->post('designation'),
				'role' =>                        $this->input->post('role')
				 );
			$this->ClientM->save($data);
		}
		
	}

	public function login()
	{
		    $this->form_validation->set_rules('gender','Status','required');
            if($this->form_validation->run()==false)
            {
            	$this->index();
            }
            else
            {
		    $username=$this->input->post('email');
		    $password=$this->input->post('password');
		    $stauts=$this->input->post('gender');
            $data=$this->Admin_model->admin_login($username,$password,$stauts);
            if($data->num_rows()>0)
            {
            	echo "Login";
            }
            else
            {
            	$this->session->set_flashdata('message',' Invalid Email or Password ');
				$this->index();
            }
        }

		}
		public function available_email()
		{
			 if(!filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL))  
           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           } 
		
		}
	
	
	public function Employee()
	{
		$this->load->view('layout/header');
		$this->load->view('Login/employe');
		$this->load->view('layout/footer');
	}

	public function setpassword($code)
	{
		$this->layout = "";
		$data['code']=$code;
       $this->load->view('Login/resetpasword',$data);
	}

	public function resetpasword()
	{
		$this->layout = "";
		$code=$this->input->post('code');
		$this->form_validation->set_rules('npassword','New password','required');
		$this->form_validation->set_rules('cpassword','Confrim password','required');
		if($this->form_validation->run()==false)
		{
			$this->setpassword($code);
		}
		else
		{
			$npassword=$this->input->post('npassword');
			$cpassword=$this->input->post('cpassword');
			if($npassword==$cpassword)
			{
				$data = array('admin_password' =>$npassword);
				$datax=$this->Admin_model->update_by('code',$code,$data);
				if($datax)
				{
					$this->index();
				}
			}
			else
			{
				$this->session->set_flashdata('message','Password does not match');
				$this->setpassword($code);
			}
		}
	}

	public function forgetpassword_load()
	{ 
		$this->layout = "";
		$this->load->view('Login/forgetpassword');
	}


	public function sendmail()
	{
		$this->form_validation->set_rules('email','Email','required|valid_email');
		if($this->form_validation->run()==false)
		{
			$this->forgetpassword_load();
		}
		else
		{
			$email=$this->input->post('email');
			$data=$this->Admin_model->comparemail($email);
			if($data)
			{
				$config = array
			(
				'protocal' => 'smtp',
				'smtp_host'=>'ssl://smtp.googlemail.com',
				'smtp_port'=>465,
				'smtp_user'=>'webdeveloper631@gmail.com',
				'smtp_pass'=>'rescue1122',
			);
			$code=uniqid();
			$path=base_url('LoginCI/setpassword/'.$code);
			$this->load->library('email');
			$this->email->from('webdeveloper631@gmail.com', 'Imran Sharif');
			$this->email->set_newline("\r\n");
			$this->email->to($email);
			$this->email->subject('Password Reset');
			$this->email->message($path);
			if($this->email->send())
			{
				$data = array
				('code' =>$code );
				$this->Admin_model->update_by_where($data,$email);
                 $this->session->set_flashdata('msg','Check You Email');
                 $this->forgetpassword_load();
			}

			}
			else
			{
				$this->session->set_flashdata('msg','Email not Exit');
                 $this->forgetpassword_load();
			}

		}
	}
	public function task()
	{
		$this->load->view('task');
	}
	public function client()
	{
		$this->load->view('layout/header');
		$this->load->view('Login/client');
		$this->load->view('layout/footer');
	}
}
?>