<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        checklogin();
        $this->load->model(['master_m']);
    }

    public function tahunajaran()
    {
        $data['year'] = $this->master_m->get('years')->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/master/tahunajaran/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/master/tahunajaran/jsindex');
        $this->load->view('page/layout/close');
    }

    public function storetahunajaran()
    {
        $year = $this->master_m->getwhere('years', ['yearname' => $this->input->post('yearname')])->num_rows();
        if ($year) {
            $this->session->set_flashdata('error', 'Tahun ajaran sudah pernah di buat sebelumnya!');
            redirect('master/tahunajaran');
        } else {
            $data = [
                'yearname' => $this->input->post('yearname')
            ];
            $this->master_m->store('years', $data);

            $year = $this->master_m->getwhere('years', ['yearname' => $this->input->post('yearname')])->row();
            $kelas = [
                [
                    'classname' => 'TK Kecil A',
                    'year_id' => $year->year_id
                ],
                [
                    'classname' => 'TK Kecil B',
                    'year_id' => $year->year_id
                ],
                [
                    'classname' => 'TK Besar A',
                    'year_id' => $year->year_id
                ],
                [
                    'classname' => 'TK Besar B',
                    'year_id' => $year->year_id
                ],
            ];
            foreach ($kelas as $k) {
                $this->master_m->store('classes', $k);
            }

            $this->session->set_flashdata('success', 'Data tahun ajaran baru dan data kelas baru berhasil di buat!');
            redirect('master/tahunajaran');
        }
    }

    public function updatetahunajaran()
    {
        $data = [
            'yearname' => $this->input->post('yearname')
        ];
        $this->master_m->update('years', $data, ['year_id' => $this->input->post('year_id')]);

        $this->session->set_flashdata('success', 'Data berhasil di perbarui!');
        redirect('master/tahunajaran');
    }

    public function updatestatustahunajaran()
    {
        $data = [
            'status' => $this->input->post('status')
        ];
        $this->master_m->update('years', $data, ['year_id' => $this->input->post('year_id')]);

        $this->session->set_flashdata('success', 'Status berhasil di perbarui!');
        redirect('master/tahunajaran');
    }

    // kelas baru
    public function kelas($id)
    {
        $data['year'] = $this->master_m->getwhere('years', ['year_id' => $id])->row();
        $data['classes'] = $this->master_m->getwhere('classes', ['year_id' => $id])->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/master/kelasbaru/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    // siswa baru
    public function siswa($class_id)
    {
        $data['classes'] = $this->master_m->getwhere('classes', ['class_id' => $class_id])->row();
        $data['year'] = $this->master_m->getwhere('years', ['year_id' => $data['classes']->year_id])->row();

        $where = [
            'class_id' => $data['classes']->class_id,
            'year_id' => $data['year']->year_id
        ];
        $data['siswa'] = $this->master_m->getwhere('siswas', $where)->result();

        $this->load->view('page/layout/header');
        $this->load->view('page/master/siswabaru/index', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/master/siswabaru/jsindex');
        $this->load->view('page/layout/close');
    }

    public function createsiswa($class_id, $year_id)
    {
        $data['classes'] = $this->master_m->getwhere('classes', ['class_id' => $class_id])->row();
        $data['year'] = $this->master_m->getwhere('years', ['year_id' => $year_id])->row();

        $data['tahun'] = substr($data['year']->yearname, 2, 2);

        $siswa = $this->master_m->get('siswas')->num_rows();
        if ($siswa) {
            $thn = $this->master_m->thnsave()->row();

            if ($data['tahun'] > $thn->thn) {
                $data['noinduk'] = '01' . $data['tahun'] . "001";
            } else {
                $data['noinduk'] = $this->master_m->noinduk($data['tahun']);
            }
        } else {
            $data['noinduk'] = $this->master_m->noinduk($data['tahun']);
        }


        $this->load->view('page/layout/header');
        $this->load->view('page/master/siswabaru/create', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/master/siswabaru/jscreate');
        $this->load->view('page/layout/close');
    }

    public function storesiswa()
    {
        $data = [
            'class_id' => $this->input->post('class_id'),
            'year_id' => $this->input->post('year_id'),
            'namasiswa' => $this->input->post('namasiswa'),
            'namapgln' => $this->input->post('namapgln'),
            'noinduk' => $this->input->post('noinduk'),
            'jk' => $this->input->post('jk'),
            'tgllahir' => $this->input->post('tgllahir'),
            'agama' => $this->input->post('agama'),
            'anakke' => $this->input->post('anakke'),
            'ayah' => $this->input->post('ayah'),
            'ibu' => $this->input->post('ibu'),
            'pekerjaanayah' => $this->input->post('pekerjaanayah'),
            'pekerjaanibu' => $this->input->post('pekerjaanibu'),
            'alamatortu' => $this->input->post('alamatortu'),
            'thn' => $this->input->post('thn'),
        ];
        $this->master_m->store('siswas', $data);

        $this->session->set_flashdata('success', 'Data siswa dan blueprint nilai siswa berhasil di tambahkan!');
        redirect('master/siswa/' . $this->input->post('class_id'));
    }

    public function getsiswaid($siswa_id)
    {
        $siswa = $this->master_m->getwhere('siswas', ['siswa_id' => $siswa_id])->row();
        echo json_encode($siswa);
    }

    public function siswaedit($siswa_id)
    {
        $data['siswa'] = $this->master_m->getwhere('siswas', ['siswa_id' => $siswa_id])->row();
        $data['classes'] = $this->master_m->getwhere('classes', ['class_id' => $data['siswa']->class_id])->row();
        $data['year'] = $this->master_m->getwhere('years', ['year_id' => $data['siswa']->year_id])->row();

        $this->load->view('page/layout/header');
        $this->load->view('page/master/siswabaru/edit', $data);
        $this->load->view('page/layout/footer');
        $this->load->view('page/master/siswabaru/jscreate');
        $this->load->view('page/layout/close');
    }

    public function updatesiswa()
    {
        $data = [
            'namasiswa' => $this->input->post('namasiswa'),
            'namapgln' => $this->input->post('namapgln'),
            'noinduk' => $this->input->post('noinduk'),
            'jk' => $this->input->post('jk'),
            'tgllahir' => $this->input->post('tgllahir'),
            'agama' => $this->input->post('agama'),
            'anakke' => $this->input->post('anakke'),
            'ayah' => $this->input->post('ayah'),
            'ibu' => $this->input->post('ibu'),
            'pekerjaanayah' => $this->input->post('pekerjaanayah'),
            'pekerjaanibu' => $this->input->post('pekerjaanibu'),
            'alamatortu' => $this->input->post('alamatortu'),
        ];
        $this->master_m->update('siswas', $data, ['siswa_id' => $this->input->post('siswa_id')]);

        $this->session->set_flashdata('success', 'Data siswa berhasil di diperbarui!');
        redirect('master/siswa/' . $this->input->post('class_id'));
    }

    public function siswadestroy($id)
    {
        $siswa = $this->master_m->getwhere('siswas', ['siswa_id' => $id])->row();
        $wheresiswa1 = [
            'siswa_id' => $siswa->siswa_id,
            'class_id' => $siswa->class_id,
            'year_id' => $siswa->year_id,
            'semester' => 1,
        ];
        $wheresiswa2 = [
            'siswa_id' => $siswa->siswa_id,
            'class_id' => $siswa->class_id,
            'year_id' => $siswa->year_id,
            'semester' => 2,
        ];
        $where = ['siswa_id' => $siswa->siswa_id];
        // agama dan moral
        $this->master_m->destroy('agamadanmoral', $wheresiswa1);
        $this->master_m->destroy('agamadanmoral', $wheresiswa2);
        // bahasa
        $this->master_m->destroy('bahasa', $wheresiswa1);
        $this->master_m->destroy('bahasa', $wheresiswa2);
        // kognitif
        $this->master_m->destroy('kognitif', $wheresiswa1);
        $this->master_m->destroy('kognitif', $wheresiswa2);
        // motorik
        $this->master_m->destroy('motorik', $wheresiswa1);
        $this->master_m->destroy('motorik', $wheresiswa2);
        // seni
        $this->master_m->destroy('seni', $wheresiswa1);
        $this->master_m->destroy('seni', $wheresiswa2);
        // sosialemosional
        $this->master_m->destroy('sosialemosional', $wheresiswa1);
        $this->master_m->destroy('sosialemosional', $wheresiswa2);
        // ekstraagama
        $this->master_m->destroy('ekstraagama', $wheresiswa1);
        $this->master_m->destroy('ekstraagama', $wheresiswa2);
        // ekstrabahasajawa
        $this->master_m->destroy('ekstrabahasajawa', $wheresiswa1);
        $this->master_m->destroy('ekstrabahasajawa', $wheresiswa2);
        // ekstradrumbband
        $this->master_m->destroy('ekstradrumbband', $wheresiswa1);
        $this->master_m->destroy('ekstradrumbband', $wheresiswa2);
        // ekstramenari
        $this->master_m->destroy('ekstramenari', $wheresiswa1);
        $this->master_m->destroy('ekstramenari', $wheresiswa2);
        // ekstramenggambar
        $this->master_m->destroy('ekstramenggambar', $wheresiswa1);
        $this->master_m->destroy('ekstramenggambar', $wheresiswa2);
        // catatan
        $this->master_m->destroy('catatan', $wheresiswa1);
        $this->master_m->destroy('catatan', $wheresiswa2);
        // siswa
        $this->master_m->destroy('siswas', $where);

        $this->session->set_flashdata('success', 'Data siswa dan data blueprint nilai siswa berhasil di hapus!');
        redirect('home');
    }

    // profile
    public function profile()
    {
        $this->load->view('page/layout/header');
        $this->load->view('page/profile/index');
        $this->load->view('page/layout/footer');
        $this->load->view('page/layout/close');
    }

    public function updateprofile()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tgllahir' => $this->input->post('tgllahir'),
            'pendidikanterakhir' => $this->input->post('pendidikanterakhir'),
            'pengampu' => $this->input->post('pengampu'),
            'telepon' => $this->input->post('telepon'),
        ];
        $this->master_m->update('users', $data, ['user_id' => $this->session->userdata('user_id')]);

        $this->session->set_flashdata('success', 'Profile berhasil di diperbarui!');
        redirect('master/profile');
    }
}
