<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index() {
		$data = $this->mymodel->GetCategory();
		$this->load->view('tabel',array('data'=>$data));
	}
	//ini untuk mendirect ke view tambah data
	public function tambah_data() {
		$this->load->view('form_tambah');
	}
	//ini untuk proses penambahan data
	public function tambah() {
		$id = $_POST['ID'];
		$nama = $_POST['Name'];
		$data_tambah = array(
			'ID' => $id,
			'Name' => $nama
		);
		$res = $this->mymodel->InsertCategory('category',$data_tambah);
		if($res>=1){
			$this->session->set_flashdata('pesan','Tambah Data Sukses');
			redirect('crud/index');
		}else{
			echo "<h2> Tambah data gagal</h2>";
		}
	}
	//ini proses penghapusan data
	public function hapus($id) {
		$where = array('ID' => $id);
		$res = $this->mymodel->DeleteCategory('category',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Hapus Data Sukses');
			redirect('crud/index');
		}else{
			echo "<h2> Hapus data gagal</h2>";
		}
	}
	//ini untuk catch data yang diedit sesuai dengan id dan mendirect ke view edit data
	public function edit($id) {
		$cat = $this->mymodel->GetCategory("where ID = '$id'");
		$data = array(
			"id" => $cat[0]['ID'],
			"nama" => $cat[0]['Name']);
		$this->load->view('form_edit',$data);
	}
	//ini untuk proses pengeditannya
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
			$this->session->set_flashdata('pesan','Edit Data Sukses');
			redirect('crud/index');
			
		}
	}
}