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
	{
		$data['activemenu'] = 'home';
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function cart(){
			$data['activemenu'] = 'cart';
		$this->load->view('header',$data);
		$this->load->view('cart');
		$this->load->view('footer');
	}
	public function pesanerror(){
		$data['activemenu'] = 'home';
		$this->load->view('header',$data);
		$this->load->view('404');
		$this->load->view('footer');

	}
	public function home(){
		$this->load->view('home');
	}
	public function login(){
		$this->load->view('login');
	}
	public function product(){

		$data['activemenu'] = 'product';
		$this->load->view('header',$data);
		$this->load->view('product');
		$this->load->view('footer');
	}
	public function about(){
		$data['activemenu'] = 'about';
		$this->load->view('header',$data);
		$this->load->view('about-us');
		$this->load->view('footer');
	}
	public function blog(){
		$data['activemenu'] = 'blog';
		$this->load->view('header',$data);
		$this->load->view('blog');
		$this->load->view('footer');
	}

}
