<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index() {
		$data = $this->mymodel->GetCategory();
		$this->load->view('tabel',array('data'=>$data));
	}
	public function tambah_data() {
		echo "<h2>tambah data</h2>";
	}
}