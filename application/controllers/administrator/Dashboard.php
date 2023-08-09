<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('template_menu/header_menu');
		$this->load->view('administrator/template/dashboard/dashboard');
		$this->load->view('template_menu/footer_menu');
	}
}
