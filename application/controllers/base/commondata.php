<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class commondata extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model('base/common_model','common');
		$this->output->enable_profiler(true);
		$this->common->gp="abc";
	}

	public function index()
	{
		 //$r=array();
		 $r=$this->common->getlist();
		 $data['list']=$r;
		 $this->load->view('admin/common',$data);
	}

	public function _is_unique2($input) {
	    

	    $exclude_id = $this->input->post('code');

	    $dt=new common_model();
	    $dt->where('gp','default')->where('code',$exclude_id);
        $dt->get();
        if ($dt->exists())
    	{
    		$this->form_validation->set_message('_is_unique2', 'code exists');
	        return FALSE;
    	}

	    //if( $this->db->where('code', $input)->limit(1)->get('common')->num_rows())
	    if ($input=="a")    
	    {
	        $this->form_validation->set_message('_is_unique2', 'code exists');
	        return FALSE;
	    }

	    return TRUE;
	}


	public function create()
	{

		$data['code'] = '';
		$data['nm'] = '';

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('nm', 'name', 'trim|required');
		$this->form_validation->set_rules('code', 'code', 'trim|required|is_unique');
		$this->form_validation->set_rules('code', 'code', 'callback__is_unique2');

		//echo $this->form_validation->run();
		if ($this->form_validation->run() === true)
		{
			$dt=new common_model();
			$dt->code=$this->input->post("code");
			$dt->nm=$this->input->post("nm");
			$dt->save();
			print_r($dt);
			echo 'success';
		  
		}
		else 
		{
			print_r($data);
			$this->load->vars($data);
			$this->load->view("common-form");	
		}
	}

	public function create_()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		//$data['nm'] = '';
		//$data['gp'] = '';
		//$data['code'] = '';
		
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('nm', 'name', 'required');
		$this->form_validation->set_rules('code', 'code', 'required');

		echo $this->form_validation->run();
		if ($this->form_validation->run() === false)
		{
			//echo 'create fail';
			$this->load->view("common-form");
			exit;
		}



		return;

		
			
		//$this->load->vars($data);


	}
}

?>