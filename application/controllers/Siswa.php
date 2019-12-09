<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model(['master_m', 'siswa_m']);
    }

    public function index()
    {
        $data['cyear'] = $this->siswa_m->getwhere('years', ['status' => 'Aktif'])->num_rows();

        if ($data['cyear']) {
            $data['year'] = $this->siswa_m->getwhere('years', ['status' => 'Aktif'])->row();
            $data['classes'] = $this->siswa_m->getwhere('classes', ['year_id' => $data['year']->year_id])->result();
        }

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function show($class_id)
    {
        $data['siswa'] = $this->siswa_m->getwhere('siswas', ['class_id' => $class_id])->result();
        $data['classes'] = $this->master_m->getwhere('classes', ['class_id' => $class_id])->row();
        $data['year'] = $this->master_m->getwhere('years', ['year_id' => $data['classes']->year_id])->row();
        $data['csiswa'] = $this->siswa_m->getwhere('siswas', ['class_id' => $class_id])->num_rows();

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/show', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/siswa/jsshow');
        $this->load->view('page/layout/close');
    }

    // semester nilai
    public function semester($siswa_id, $class_id, $year_id)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getwhere('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getwhere('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getwhere('years', $datayear)->row();

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/nilai/semester', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function datanilai($siswa_id, $class_id, $year_id, $semester, $bulan)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getwhere('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getwhere('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getwhere('years', $datayear)->row();
        $data['semester'] = $semester;
        $data['bulan'] = $bulan;

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/nilai/datanilai', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function detailnilai($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
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
        $data['caspek'] = $this->siswa_m->getjoinaspek($table, $join, $where)->num_rows();
        if ($data['caspek']) {
            $data['aspek'] = $this->siswa_m->getjoinaspek($table, $join, $where)->result();
        }
        $data['bulan'] = $bulan;
        $data['table'] = $table;
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

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/nilai/detailnilai', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/siswa/nilai/js/jsdetailnilai');
        $this->load->view('page/layout/close');
    }

    public function detailnilaiekstra($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
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
        $data['ckulikuler'] = $this->siswa_m->getjoinkulikuler($table, $join, $where)->num_rows();
        if ($data['ckulikuler']) {
            $data['kulikuler'] = $this->siswa_m->getjoinkulikuler($table, $join, $where)->result();
        }
        $data['bulan'] = $bulan;
        $data['table'] = $table;
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

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/nilai/detailnilaiekstra', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/siswa/nilai/js/jsdetailnilaiekstra');
        $this->load->view('page/layout/close');
    }

    // tahun sebelumya
    public function prevyear()
    {
        $data['cyear'] = $this->siswa_m->getwhere('years', ['status' => 'Selesai'])->num_rows();
        if ($data['cyear']) {
            $data['year'] = $this->siswa_m->getwhere('years', ['status' => 'Selesai'])->result();
        }

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/prevyear/year', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function classesprevyear($year_id)
    {
        $data['year'] = $this->siswa_m->getwhere('years', ['year_id' => $year_id])->row();
        $data['classes'] = $this->siswa_m->getwhere('classes', ['year_id' => $year_id])->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/prevyear/classesprevyear', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function search()
    {
        $data['siswa'] = $this->siswa_m->search('siswas', $this->input->GET('keyword', true));

        $this->load->view('page/layout/header');
        $this->load->view('page/siswa/search', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/siswa/jsshow');
        $this->load->view('page/layout/close');
    }
}
