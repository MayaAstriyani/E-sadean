<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function index()
	{
		$data['contents'] = 'admin/transaksi';
		$this->load->view('template/index',$data);
	}
}