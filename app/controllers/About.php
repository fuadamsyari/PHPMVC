<?php
class About extends Controller
{
    public function index($nama = "Fuad", $pekerjaan = "Mahasiswa", $usia = 22)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['usia'] = $usia;
        $data['judul'] = 'About ME';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Halaman Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
