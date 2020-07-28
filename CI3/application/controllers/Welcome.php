<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	{	$this->load->model('ITEM_MODELS');
		$data['items']=$this->ITEM_MODELS->get_all();


		$this->load->view('template/head');
		$this->load->view('template/sitebar');
		$this->load->view('template/topbar');
		$this->load->view('conten/home',$data);
		$this->load->view('template/foot');
	}
	public function insert()
	{
		$this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('user/all');
		$this->load->view('template/foot');
	}
}
