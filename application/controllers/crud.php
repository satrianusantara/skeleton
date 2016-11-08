<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index() {
		$data = $this->mymodel->GetCategory();
		$this->load->view('tabel',array('data'=>$data));
	}
	public function tambah_data() {
		$this->load->view('form_tambah');
	}

	public function tambah() {
		$id = $_POST['ID'];
		$nama = $_POST['Name'];
		$data_tambah = array(
			'ID' => $id,
			'Name' => $nama
		);
		$res = $this->mymodel->InsertCategory('category',$data_tambah);
		if($res>=1){
			redirect('crud/index');
		}else{
			echo "<h2> Tambah data gagal</h2>";
		}
	}
}