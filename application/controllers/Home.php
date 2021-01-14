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
    public function __construct()
    {
		parent::__construct();
	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
	
	public function login(){
		$data_session = array(
			'log' => "Masuk",
			);
		$this->session->set_userdata($data_session);

		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('home/index');
	}
	
	public function daftar(){
		$this->load->view('templates/header');
		$this->load->view('daftar/daftar');
		$this->load->view('templates/footer');
	}
	
	public function daftar2(){
		$this->load->view('templates/header');
		$this->load->view('daftar/daftar2');
		$this->load->view('templates/footer');
	}
	
	public function daftar3(){
		$this->load->view('templates/header');
		$this->load->view('daftar/daftar3');
		$this->load->view('templates/footer');
	}
	
	public function tentang(){
		$this->load->view('templates/header');
		$this->load->view('tentang');
		$this->load->view('templates/footer');
	}
	
	public function produk(){
		$this->load->view('templates/header');
		$this->load->view('produk');
		$this->load->view('templates/footer');
	}
	
	public function rentalkan(){
		$this->load->view('templates/header');
		$this->load->view('rentalkan');
		$this->load->view('templates/footer');
	}
	
}
