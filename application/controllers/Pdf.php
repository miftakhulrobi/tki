<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->library('pdf_report');
        $this->load->model(['master_m', 'siswa_m', 'auth_m']);
    }

    public function siswaall($class_id)
    {
        $data['siswa'] = $this->siswa_m->getwhere('siswas', ['class_id' => $class_id])->result();
        $data['classes'] = $this->master_m->getwhere('classes', ['class_id' => $class_id])->row();
        $data['year'] = $this->master_m->getwhere('years', ['year_id' => $data['classes']->year_id])->row();
        $data['now'] = date('dMY');

        $this->load->view('page/pdf/siswa/siswaall', $data);
    }

    public function siswaid($siswa_id)
    {
        $data['siswa'] = $this->siswa_m->getwhere('siswas', ['siswa_id' => $siswa_id])->row();
        $data['classes'] = $this->master_m->getwhere('classes', ['class_id' => $data['siswa']->class_id])->row();
        $data['year'] = $this->master_m->getwhere('years', ['year_id' => $data['classes']->year_id])->row();
        $data['now'] = date('dMY');

        $this->load->view('page/pdf/siswa/siswaid', $data);
    }

    // guru
    public function guruall()
    {
        $data['guru'] = $this->auth_m->get('users')->result();
        $data['now'] = date('dMY');
        $this->load->view('page/pdf/guru/guruall', $data);
    }

    public function guruid($id)
    {
        $data['guru'] = $this->auth_m->getwhere('users', ['user_id' => $id])->row();
        $data['now'] = date('dMY');
        $this->load->view('page/pdf/guru/guruid', $data);
    }

    // Nilai
    public function nilaiaspek($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getwhere('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getwhere('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getwhere('years', $datayear)->row();
        $data['semester'] = $semester;

        $where = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
        ];
        $data['aspek'] = $this->siswa_m->getjoinaspek($table, $join, $where)->result();
        $data['bulan'] = $bulan;
        $data['tabel'] = $table;
        $data['join'] = $join;

        $catatan = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
            'table' => $table,
        ];
        $data['catatan'] = $this->siswa_m->getwhere('catatan', $catatan)->row();

        $data['now'] = date('dMY');
        $this->load->view('page/pdf/nilai/nilaiaspek', $data);
    }

    public function nilaiekstra($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getwhere('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getwhere('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getwhere('years', $datayear)->row();
        $data['semester'] = $semester;

        $where = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
        ];
        $data['kulikuler'] = $this->siswa_m->getjoinkulikuler($table, $join, $where)->result();
        $data['bulan'] = $bulan;
        $data['tabel'] = $table;
        $data['join'] = $join;

        $catatan = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
            'table' => $table,
        ];
        $data['catatan'] = $this->siswa_m->getwhere('catatan', $catatan)->row();

        $data['now'] = date('dMY');
        $this->load->view('page/pdf/nilai/nilaiekstra', $data);
    }
}
