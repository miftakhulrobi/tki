<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_m extends CI_Model
{

    public function getwhere($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function store($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function update($table, $data, $where)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function getjoinaspek($table, $join, $where)
    {
        $this->db->join($join, $join . '.kemampuan_id = ' . $table . '.kemampuan_id', 'left');
        return $this->db->get_where($table, $where);
    }

    public function getjoinkulikuler($table, $join, $where)
    {
        $this->db->join($join, $join . '.program_id = ' . $table . '.program_id', 'left');
        return $this->db->get_where($table, $where);
    }

    public function nilai($table, $where)
    {
        $this->db->select('nilai');
        return $this->db->get_where($table, $where);
    }

    public function search($table, $keyword)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->like('namasiswa', $keyword);
        $this->db->or_like('noinduk', $keyword);
        return $this->db->get()->result();
    }
}
