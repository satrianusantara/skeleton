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

	public function hapus($id) {
		$where = array('ID' => $id);
		$res = $this->mymodel->DeleteCategory('category',$where);
		if($res>=1){
			redirect('crud/index');
		}else{
			echo "<h2> Hapus data gagal</h2>";
		}
	}

	public function edit($id) {
		$cat = $this->mymodel->GetCategory("where ID = '$id'");
		$data = array(
			"id" => $cat[0]['ID'],
			"nama" => $cat[0]['Name']);
		$this->load->view('form_edit',$data);
	}

	public function edit_data(){
		$id = $_POST['ID'];
		$nama = $_POST['Name'];
		$data_edit = array(
			'Name' => $nama
		);
		$where = array(
			'ID' => $id);
		$res = $this->mymodel->UpdateCategory('category',$data_edit, $where);
		if($res>=1){
			redirect('crud/index');
		}
	}
}