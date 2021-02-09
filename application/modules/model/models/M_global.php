<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_global extends CI_Model {

	function insert($table, $data)
	{
		$this->db->insert($table, $data);
		return true;
	}

	function update($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
		return true;
	}

	function delete($table, $where)
	{
		$this->db->delete($table, $where);
		return true;
	}

	function get_where_row($table, $where)
	{
		$query = $this->db->get_where($table, $where);
		return $query->row_array();
	}

	function login($where)
	{
		$query = $this->db->get_where('m_admin', $where);
		return $query->row_array();
	}

	function get_soal_all()
	{
		$this->db->order_by('soal_id', 'asc');
		$query = $this->db->get('m_soal');
		return $query->result_array();
	}

	function get_responden_all()
	{
		$this->db->order_by('import_nama', 'asc');
		$query = $this->db->get('m_responden_import');
		return $query->result_array();
	}

	function get_responden_all_limit($offset, $where)
	{
		$this->db->select('*');
		$this->db->from('m_responden_import');
		$this->db->where($where);
		$this->db->limit(250, $offset*250);
		$this->db->order_by('import_nama', 'asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	function get_responden($id)
	{
		$query = $this->db->get_where('m_responden_import', ['import_id' => $id]);
		return $query->row_array();
	}

	function get_responden_where($id)
	{
		$query = $this->db->get_where('m_responden_import', ['import_id' => $id]);
		return $query->result_array();
	}

	function get_provinsi_all()
	{
		$this->db->order_by('nama_provinsi', 'asc');
		$query = $this->db->get('m_provinsi');
		return $query->result_array();
	}

	function get_kota($provinsi_id)
	{
		$this->db->order_by('nama_kabupaten', 'asc');
		$query = $this->db->get_where('m_kabupaten', ['id_provinsi' => $provinsi_id]);
		return $query->result_array();
	}

	function get_kecamatan($kota_id)
	{
		$this->db->order_by('nama_kecamatan', 'asc');
		$query = $this->db->get_where('m_kecamatan', ['id_kabupaten' => $kota_id]);
		return $query->result_array();
	}

	function get_kreator_where($id)
	{
		$query = $this->db->get_where('m_kreator', ['kreator_id' => $id]);
		return $query->result_array();
	}

}