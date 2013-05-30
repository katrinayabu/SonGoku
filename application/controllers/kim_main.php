<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller{

  /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	private $data = array();
	
	public function __construct(){
		# Initializing Main Object		
		// echo "constructing";
		parent::__construct();
		$this->load->helper('url');
		$this->data['base_url'] = base_url();
		$this->load->model('main_model');
		$this->load->model('ojt_model');
		$this->load->library('uri');
	}
	
	public function index(){
		$this->load->view('ojt_view',$this->data);
		
	}
	/*
	public function get_data(){
		#getting the parameter in the url
		echo "Segment1 = ".$this->uri->segment(1);echo "</br>";
		echo "Segment2 = ".$this->uri->segment(2);echo "</br>";
		echo "Segment3 = ".$this->uri->segment(3);echo "</br>";
		echo "Segment4 = ".$this->uri->segment(4);echo "</br>";
		#function call to main model's get main data function
		$this->data['main_data'] = $this->main_model->get_main_data();
		$this->load->view('main_view',$this->data);
	}
	
	public function get_data2(){
		echo "blah2";
	}
	*/
	
	#data insertion
	public function add_ojt(){
		$ojt = array();
		#getting the post variables
		$ojt['Firstname'] = $this->input->post('first_name');
		$ojt['Middlename'] = $this->input->post('middle_name');
		$ojt['Lastname'] = $this->input->post('last_name');
		$ojt['Nickname'] = $this->input->post('nick_name');
		$ojt['Gender'] = $this->input->post('gender');
		$ojt['Birthdate'] = $this->input->post('birthdate');
		$ojt['Civilstatus'] = $this->input->post('civil_status');
		$ojt['Citizenship'] = $this->input->post('citizenship');
		$ojt['Homeaddress'] = $this->input->post('homeaddress');
		$ojt['Password'] = $this->input->post('password');
		$ojt['Confirmpassword'] = $this->input->post('confirm_pass');
		$this->ojt_model->insert_ojt($ojt);
	}
	
	
	#data insertion
	public function update_ojt(){
		$ojt = array();
		#getting the post variables
		$ojt['OJTID'] = $this->input->post('ojt_id');
		$ojt['Firstname'] = $this->input->post('first_name');
		$ojt['Middlename'] = $this->input->post('middle_name');
		$ojt['Lastname'] = $this->input->post('last_name');
		$ojt['Nickname'] = $this->input->post('nick_name');
		$ojt['Gender'] = $this->input->post('gender');
		$ojt['Birthdate'] = $this->input->post('birthdate');
		$ojt['Civilstatus'] = $this->input->post('civil_status');
		$ojt['Citizenship'] = $this->input->post('citizenship');
		$ojt['Homeaddress'] = $this->input->post('homeaddress');
		$ojt['Password'] = $this->input->post('password');
		$ojt['Confirmpassword'] = $this->input->post('confirm_pass');
		return $this->ojt_model->update_ojt_details($ojt);
	}
	
	#data retrieval
	public function get_ojts(){
		$this->data['ojts_list'] = $this->ojt_model->get_ojts();
		// print_r($this->data['ojts_list']);
		// echo "<br/>";
		$this->load->view('ojt_list_view',$this->data);
	}
	
	#data deletion
	public function remove_ojt(){
		$ojt_id = $this->input->post('ojt_id');
		return $this->ojt_model->delete_ojt($ojt_id);
	}
	
	public function load_ojt_details(){
		$ojt_id = $this->input->post('ojt_id');
		$this->data['ojt_details'] = $this->ojt_model->get_ojt_by_id($ojt_id);
		$this->load->view('ojt_details_view',$this->data);
	}
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
