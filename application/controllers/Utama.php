<?php 	

	/**
	 * 
	 */
	class Utama extends CI_Controller
	{
		
		function __construct()
		{		
			parent:: __construct();
		}

		function index(){

			 $this->load->view('template/header');
			 $this->load->view('utama/index');
			 $this->load->view('template/footer');
		}


		function data_member(){

			 $this->load->view('template/header');
			 $this->load->view('utama/data_member');
			 $this->load->view('template/footer');
		}
	}

 ?>