<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{
    public function getwhere($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function get($table)
    {
        return $this->db->get($table);
    }
}
