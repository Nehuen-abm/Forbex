<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller
{
	function __construct(){
		parent::__construct();

		$this->language = $this->uri->segment(1);


		if (empty( $this->uri->segment(2) ) ){
			
			$this->file_lang =  'home';

		}else{
			if($this->uri->segment(2) == 'deporte'){

				$this->file_lang =  $this->uri->segment(3);
			}else{

				$this->file_lang =  $this->uri->segment(2);
			}
		}
		


		switch ($this->language) {
			case 'en':
			case 'sp':
			case 'pr':
				 $this->lang->load( $this->file_lang,$this->language);
				break;
			// case 'sp':
			// 	 $this->lang->load('message','es');
			default:
				 $this->lang->load( $this->file_lang,'es');
				 redirect(site_url('sp/'));
				break;
		}

	
	}

	public function index() {
		$data["language_msg"] = $this->lang->line("msg_hello");
		$data['language'] 	  = $this->language;
		$data['vista']		  = 'futbol';
		$this->load->view('template', $data);
		
	}

	public function novedades(){

		$data["language_msg"] = $this->lang->line("msg_hello");
		$data['language'] 	  = $this->language;
		$data['vista']	      = 'novedades';
		$this->load->view('template', $data);
	}

	public function empresa(){

		$data["language_msg"] = $this->lang->line("msg_hello");
		$data['language']     = $this->language;
		$data['vista']	      = 'empresa';
		$this->load->view('template', $data);
	}
	public function deportes($deporte){
	
		$data["language_msg"] = $this->lang->line("msg_hello");
		$data['language'] 	  = $this->language;
		$data['active_sec']   = 'deporte';
		$data['vista']	      = $deporte;
		$this->load->view('template', $data);
	}
	public function clientes(){

		$data["language_msg"] = $this->lang->line("msg_hello");
		$data['language'] 	  = $this->language;
	    $data['vista']	      = 'clientes';
		$this->load->view('template', $data);
	}
	public function certificaciones(){

		$data["language_msg"] = $this->lang->line("msg_hello");
		$data['language']     = $this->language;
	    $data['vista']	      = 'certificaciones';
		$this->load->view('template', $data);
	}
	public function asesoramiento(){

		$data["language_msg"] = $this->lang->line("msg_hello");
		$data['language']     = $this->language;
		$data['vista'] 	      = 'asesoramiento';
		$this->load->view('template', $data);
	}	
	public function contacto(){

		$data["language_msg"] = $this->lang->line("msg_hello");
		$data['language']     = $this->language;
		$data['vista'] 	      = 'contacto';
		$this->load->view('template', $data);
	}

}