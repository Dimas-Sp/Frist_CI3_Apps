<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->view('template/topbar');
		$this->load->view('user/all',$data);
		$this->load->view('template/foot');
	}
	public function view()
	{ 	$id = $_GET['id'];
		$this->load->model('ITEM_MODELS');
		$data['items']=$this->ITEM_MODELS->get_one($id);

		$this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('user/view',$data);
		$this->load->view('template/foot');
	}
	public function buy()
	{
		$id = $_GET['id'];
		$this->load->model('ITEM_MODELS');
		$data['items'] = $this->ITEM_MODELS->get_one($id);
		
		$this->load->view('template/head');
		$this->load->view('template/topbar');
		$this->load->view('user/check_out', $data);
		$this->load->view('template/foot');
	}
	public function upload()
	{
		$this->kirim($_POST);
	}
	private function kirim($data)
	{
		$this->load->model('ITEM_MODELS');
		$this->ITEM_MODELS->create2($data);
		$a = 	"paket sedang di kemas harap tunggu paket Sudah sampai terimakasih";
		$this->session->set_flashdata('succes', $a);
		redirect('/user', $a);
	}
}