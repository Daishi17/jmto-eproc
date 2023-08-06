<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fm_jenis_jadwal extends CI_Controller {

	public function index()
	{
		$this->load->view('administrator/template/file_master/js_header_fm');
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/template/file_master/fm_jenis_jadwal');
        $this->load->view('administrator/template/file_master/js_footer_fm');
        $this->load->view('administrator/template_menu/footer_menu');
	}
}
