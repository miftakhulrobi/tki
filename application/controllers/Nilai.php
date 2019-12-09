<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model(['siswa_m', 'nilai_m']);
    }

    public function index()
    {
        $data['cyear'] = $this->siswa_m->getwhere('years', ['status' => 'Aktif'])->num_rows();

        if ($data['cyear']) {
            $data['year'] = $this->siswa_m->getwhere('years', ['status' => 'Aktif'])->row();
            $data['classes'] = $this->siswa_m->getwhere('classes', ['year_id' => $data['year']->year_id])->result();
        }

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function show($class_id)
    {
        $data['siswa'] = $this->siswa_m->getwhere('siswas', ['class_id' => $class_id])->result();
        $data['classes'] = $this->siswa_m->getwhere('classes', ['class_id' => $class_id])->row();
        $data['year'] = $this->siswa_m->getwhere('years', ['year_id' => $data['classes']->year_id])->row();

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/show', $data);
        $this->load->view('page/layout/footer');
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
        $this->load->view('page/nilai/data/semester', $data);
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
        $this->load->view('page/nilai/data/datanilai', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function inputnilai($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getwhere('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getwhere('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getwhere('years', $datayear)->row();
        $data['semester'] = $semester;
        $data['bulan'] = $bulan;
        $data['table'] = $table;
        $data['join'] = $join;

        $data['aspekpengembangan'] = $this->nilai_m->get($join)->result();

        $where = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
        ];
        $data['countselesai'] = $this->nilai_m->getwhere($table, $where)->num_rows();

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/data/table/inputnilai', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function inputnilaiekstra($siswa_id, $class_id, $year_id, $semester, $bulan, $table, $join)
    {
        $datasiswa = ['siswa_id' => $siswa_id];
        $dataclass = ['class_id' => $class_id];
        $datayear = ['year_id' => $year_id];

        $data['siswa'] = $this->siswa_m->getwhere('siswas', $datasiswa)->row();
        $data['classes'] = $this->siswa_m->getwhere('classes', $dataclass)->row();
        $data['year'] = $this->siswa_m->getwhere('years', $datayear)->row();
        $data['semester'] = $semester;
        $data['bulan'] = $bulan;
        $data['table'] = $table;
        $data['join'] = $join;

        $data['ekstrakulikuler'] = $this->nilai_m->get($join)->result();

        $where = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'bulan' => $bulan,
        ];
        $data['countselesai'] = $this->nilai_m->getwhere($table, $where)->num_rows();

        $this->load->view('page/layout/header');
        $this->load->view('page/nilai/data/table/inputnilaiekstra', $data);
        $this->load->view('page/layout/footer');
        // $this->load->view('page/nilai/nilai/scdetailnilaiekstra');
        $this->load->view('page/layout/close');
    }

    // catatan
    public function storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $penginput, $catatan)
    {
        $data = [
            'siswa_id' => $siswa_id,
            'class_id' => $class_id,
            'year_id' => $year_id,
            'semester' => $semester,
            'table' => $table,
            'bulan' => $bulan,
            'penginput' => $penginput,
            'catatan' => $catatan,
        ];
        $this->nilai_m->store('catatan', $data);
    }

    // INSERT NILAI ASPEK
    // agama dan moral
    public function storeagamadanmoral()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 9; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'kemampuan_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // bahasa
    public function storebahasa()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 6; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'kemampuan_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // kognitif
    public function storekognitif()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 7; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'kemampuan_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // motorik
    public function storemotorik()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 5; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'kemampuan_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // seni
    public function storeseni()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 8; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'kemampuan_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // sosialemosional
    public function storesosialemosional()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'kemampuan_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }

    // INSERT NILAI EKSTRA KULIKULER
    // agama
    public function storeekstraagama()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 7; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'program_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // bahasajawa
    public function storeekstrabahasajawa()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 2; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'program_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // drumbband
    public function storeekstradrumbband()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 4; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'program_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // menari
    public function storeekstramenari()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 4; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'program_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
    // menggambar
    public function storeekstramenggambar()
    {
        $no = 1;
        $p = 1;
        $siswa_id = $this->input->post('siswa_id');
        $class_id = $this->input->post('class_id');
        $year_id = $this->input->post('year_id');
        $semester = $this->input->post('semester');
        $bulan = $this->input->post('bulan');
        $catatan = $this->input->post('catatan');
        $table = $this->input->post('table');
        for ($i = 0; $i < 4; $i++) {
            $data = [
                'siswa_id' => $siswa_id,
                'class_id' => $class_id,
                'year_id' => $year_id,
                'semester' => $semester,
                'bulan' => $bulan,
                'program_id' => $no++,
                'nilai' => $this->input->post($p++),
                'penginput' => $this->session->userdata('nama'),
            ];
            $this->nilai_m->store($table, $data);
        }
        $this->storecatatan($siswa_id, $class_id, $year_id, $semester, $table, $bulan, $this->session->userdata('nama'), $catatan);

        $this->session->set_flashdata('success', 'Berhasil menginput data nilai siswa!');
        redirect('nilai/datanilai/' . $siswa_id . '/' . $class_id . '/' . $year_id . '/' . $semester . '/' . $bulan);
    }
}
