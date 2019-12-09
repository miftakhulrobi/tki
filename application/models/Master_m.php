<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_m extends CI_Model
{
    public function get($table)
    {
        $this->db->order_by('year_id', 'desc');
        return $this->db->get($table);
    }

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

    public function destroy($table, $where)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function noinduk($tahun)
    {
        $this->db->select('RIGHT(siswas.noinduk, 3) as kode', FALSE);
        $this->db->order_by('noinduk', 'DESC');

        $this->db->limit(1);
        $query = $this->db->get('siswas');

        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = "01" . $tahun . $kodemax;
        return $kodejadi;
    }

    public function thnsave()
    {
        $this->db->order_by('thn', 'DESC');
        return $this->db->get('siswas');
    }
}
