<?php

class Auths
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('auth_m');
    }

    function user()
    {
        $user = $this->ci->auth_m->getwhere('users', ['user_id' => $this->ci->session->userdata('user_id')])->row();
        return $user;
    }

    function app()
    {
        $app = [
            'website' => 'TK ISLAM MIFTAAHUL JANNAH',
            'by' => 'Kelompok 6 FTIk Jurusan TI Universitas Semarang',
        ];
        return $app;
    }

    // public function pdfgenerator($html, $filename, $paper, $orientation)
    // {
    //     $dompdf = new Dompdf\Dompdf();
    //     $dompdf->loadHtml($html);
    //     $dompdf->setPaper($paper, $orientation);
    //     $dompdf->render();
    //     $dompdf->stream($filename, array('Attachment' => 0));
    // }
}
