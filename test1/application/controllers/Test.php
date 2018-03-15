<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
		{
		parent::__construct();
		$this->load->database(); 
		
		//	Décommenter cette ligne pour charger le helper url
		  $this->load->helper('url');
	}
	public function index()
	{

		

		$data= [
			'id'=> '21500' ,
			'title' => 'test crud --> fatma ',
			'body' => "hello word  my name is fatma ezzahra dhibi  " 
		];

		$this->load->view('Test');
		$this->load->model('news_model');
        $news = $this->news_model->getAll();
        //$data = array();
         $t = $this->$news->$res;

        $data['title'] = $news['id'];
        $data['title'] = $news['title'];
        $data['body'] = $news['body'];

		$this->load->view('new_article', $data);
		$this->load->view('welcome_message');


	}


	public function show($id) {
    $this->load->model('news_model');
    $news = $this->news_model->getAll();

    $data['title'] = $news['title'];
    $data['body'] = $news['body'];
    $this->load->view('news_article', $data);

}

	
}
