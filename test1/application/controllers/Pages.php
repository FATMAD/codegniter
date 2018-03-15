
 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
		{
		parent::__construct();
		//$data['title']=$pages;
		//$this->load->database(); 
		//Décommenter cette ligne pour charger le helper url
		//$this->load->helper('url');
	}

	public function page_view($page='home'){
		if(! file_exists(APPPATH.'views/Pages/'.$Page.'php'))

	{
		show_404();
	}
	$data['title'] = ucfirst($page);

	$this->load->view('templates/header');
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer');
	}

	

}








