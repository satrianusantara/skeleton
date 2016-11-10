<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetCategory($where="") {
		//membuat variabel data untuk menampung pengambilan data pada database
		$data = $this->db->query('select * from category '.$where);
		//hasil dari data di simpan kembali ke resulr_array untuk nanti ditampilkan kembali
		return $data->result_array();
	}
	public function InsertCategory($namatabel,$data) {
		//penginputan data ke dalam database
		$res = $this->db->insert($namatabel,$data);
		//dilakukan return agar bisa dilakukan notifikasi
		return $res;

	}
	public function UpdateCategory($namatabel,$data,$where) {
		//penguptadetan data ke dalam database (pengganti query)
		$res = $this->db->update($namatabel,$data,$where);
		//dilakukan return agar bisa dilakukan notifikasi
		return $res;

	}
	public function DeleteCategory($namatabel,$where) {
		$res = $this->db->delete($namatabel,$where);
		return $res;

	}
}