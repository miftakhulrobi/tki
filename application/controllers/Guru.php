<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model('auth_m');
    }

    public function index()
    {
        $data['guru'] = $this->auth_m->get('users')->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/guru/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/guru/jsindex');
        $this->load->view('page/layout/close');
    }

    public function showid($id)
    {
        $guru = $this->auth_m->getwhere('users', ['user_id' => $id])->row();
        echo json_encode($guru);
    }
}
