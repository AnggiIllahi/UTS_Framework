<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataPegawai()
		{
			$this->db->select("id,keterangan");
			$query = $this->db->get('jenis_hero');
			return $query->result();
		}

		public function getJabatanByPegawai($idPegawai)
		{
			$this->db->select("pegawai.nama as namaPegawai, jabatan_pegawai.id as pegawaiId, namaJabatan,DATE_FORMAT(tanggalMulai,'%d-%m-%Y') as tanggalMulai,DATE_FORMAT(tanggalSelesai,'%d-%m-%Y') as tanggalSelesai");
			$this->db->where('fk_pegawai', $idPegawai);	
			$this->db->join('pegawai', 'pegawai.id = jabatan_pegawai.fk_pegawai', 'left');	
			$query = $this->db->get('jabatan_pegawai');
			return $query->result();
		}
		public function getAnakByPegawai($idPegawai)
		{
			$this->db->select("jenis_hero.id as jenisheroId,jenis_hero.keterangan as keteranganHero, hero.id as idHero, hero.nama as namaHero,DATE_FORMAT(hero.tanggal_lahir,'%d-%m-%Y') as tanggalLahir, hero.foto as foto");
			$this->db->where('fk_jenis', $idPegawai);	
			$this->db->join('jenis_hero', 'jenis_hero.id = hero.fk_jenis', 'left');	
			$query = $this->db->get('hero');
			return $query->result();
		}


		public function insertPegawai()
		{
			$object = array('keterangan' => $this->input->post('keterangan')
				);
			$this->db->insert('jenis_hero', $object);
		}

		public function getPegawai($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('jenis_hero');
			return $query->result();
		}

		public function getAnak($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('hero');
			return $query->result();
		}

		public function UpdateById($id)
		{
			$data = array
			(
				'keterangan' =>$this->input->post('keterangan')

			);
			$this->db->where('id',$id);
			$this->db->update('jenis_hero',$data);
		}	

		

		public function deleteById($id)
		{
			$this->db->where('fk_jenis',$id);
		    $query = $this->db->get('hero');
		    $row = $query->row();

    		unlink("assets/uploads/$row->foto");
			$this->db->delete('hero', array('fk_jenis' => $id));

			$this->db->where('id', $id);
			$this->db->delete('jenis_hero');

		}

		public function deleteHeroById($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('jenis_hero');

			$this->db->where('id',$id);
		    $query = $this->db->get('hero');
		    $row = $query->row();

    		unlink("assets/uploads/$row->foto");
			$this->db->delete('hero', array('id' => $id));
		}
		
		public function insertAnak($idpegawai)
		{
			// idPegawai = 1
			$object = array(
				'nama' => $this->input->post('nama'), 
				'tanggal_lahir' => $this->input->post('tanggalLahir'),
				'foto' =>$this->upload->data('file_name'),
				'fk_jenis'=> $idpegawai
				);
			$this->db->insert('hero', $object);
		}

		public function UpdateAnakById($id)
		{
			$data = array
			(
				'nama' => $this->input->post('nama'), 
				'tanggal_lahir' => $this->input->post('tanggalLahir'),
				'foto' =>$this->upload->data('file_name')
			);
			$this->db->where('id',$id);
			$this->db->update('hero',$data);
		}	

		public function UpdateJabatanById($id)
		{
			$data = array
			(
				'namaJabatan' => $this->input->post('jabatan'), 
				'tanggalMulai' => $this->input->post('tanggalMulai'),
				'tanggalSelesai' => $this->input->post('tanggalSelesai')
			);
			$this->db->where('id',$id);
			$this->db->update('jabatan_pegawai',$data);
		}	

}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>