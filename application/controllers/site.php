<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller
{
	function __construct(){
		parent::__construct();

		$language = $this->uri->segment(1);

		switch ($language) {
			case 'en':
			case 'es':
			case 'pr':
				 $this->lang->load('message',$language);
				break;
			default:
				 $this->lang->load('message','en');
				 redirect(site_url('en/'));
				break;
		}

	
	}

	public function index() {

		$data["language_msg"] = $this->lang->line("msg_hello");
		
		$this->load->view('template', $data);
		
	}

	

	public function pagina(){
		echo "say hola ";
	}

}