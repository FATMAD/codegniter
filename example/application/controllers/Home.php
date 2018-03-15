<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
	    $this->load->model('category_model', 'category');
	    $categories = $this->category->read();

        $parents = [];
        for( $i=0; $i<count($categories); $i++){
            if($categories[$i]->parent === null){
                $parents[] = [
                    'category' => $categories[$i],
                    'childs' => $this->getChilds($categories, $categories[$i]->id)
                ];
            }
        }





        $data = [
            'categories' => $parents
        ];
		$view = $this->load->view('header', $data, TRUE);
		$view = $view . $this->load->view('home', $data, TRUE);
		$view .= $this->load->view('footer', $data, TRUE);
		echo $view;
	}

    private function getChilds($categories, $id){
	    $childs = [];
	    for($i=0; $i<count($categories); $i++){
	        if($categories[$i]->parent == $id){
                $childs[] = $categories[$i];
            }
        }
        return $childs;
    }
}

