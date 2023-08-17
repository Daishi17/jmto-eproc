<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('panitia/template/dashboard/js_header_beranda');
		$this->load->view('panitia/template_menu/header_menu');
		$this->load->view('panitia/template/dashboard/beranda');
        $this->load->view('panitia/template/dashboard/js_footer_beranda');
        $this->load->view('panitia/template_menu/footer_menu');
	}
}
