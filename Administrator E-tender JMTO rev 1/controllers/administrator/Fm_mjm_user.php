<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fm_mjm_user extends CI_Controller {

	public function index()
	{
		$this->load->view('administrator/template/file_master/js_header_fm');
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/template/file_master/fm_mjm_user');
        $this->load->view('administrator/template/file_master/js_footer_fm');
        $this->load->view('administrator/template_menu/footer_menu');
	}
}
