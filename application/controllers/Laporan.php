<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function index()
	{
		$data['contents'] = 'admin/laporan';
		$this->load->view('template/index',$data);
	}
}