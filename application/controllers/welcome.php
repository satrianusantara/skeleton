<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		//variabel data mengambil data dari database
		$data = $this->mymodel->GetCategory();
		//memanggil view dari controller kemudian mengirimkan data untukditampilkan
		$this->load->view('tabel', array('data' => $data));
	}
	public function insert() {
		$res = $this->mymodel->InsertCategory('category',array(
			"ID"=>"010",
			"Name"=>"alat mandi",
			));
		//notifikasi untuk mengetahui berhasil atau tidaknya 
		if ($res >= 1){
			echo " <h2>insert data berhasil</h2>";
		} else {
			echo " <h2>insert data gagal</h2>";
		}
	}
	public function delete() {
		$res = $this->mymodel->DeleteCategory('category',array("ID" => "011"));
		if ($res >= 1){
			echo "delete data berhasil";
		} else {
			echo "delete data gagal";
		}
	}
	public function update() {
		$res = $this->mymodel->UpdateCategory('category',array(
			"Name"=>"alat tidur",
			), array("ID" => "001"));
		//notifikasi untuk mengetahui berhasil atau tidaknya 
		if ($res >= 1){
			echo " <h2>update data berhasil</h2>";
		} else {
			echo " <h2>update data gagal</h2>";
		};
	}

	public function panggil() {
		$data = $this->db->query("select * from category");
		$data->num_rows();
		foreach ($data->result() -> $row) {
			echo $row -> ID;
			echo $row -> Name;
			echo "<hr />";
		}

	}
}