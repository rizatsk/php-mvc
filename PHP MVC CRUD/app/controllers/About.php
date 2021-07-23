<?php 

class About extends Controller{
    public function index($nama = 'Rizat Sakmir',$pekerjaan = 'WEB Developer',$umur = 21)
    {
        // dengan membuat array assoative
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['title'] = 'About Me';
        $data['active'] = 'active about';
        // karena di function view kita sudah menyiapkan parameter untuk menangkap data
        $this->view('template/header',$data);
        $this->view('about/index',$data);
        $this->view('template/footer',);
    }
    public function page()
    {
        $data['title'] = 'Pages';
        $data['active'] = 'active about';
        $this->view('template/header',$data);
        $this->view('about/page');
        $this->view('template/footer',);
    }
}