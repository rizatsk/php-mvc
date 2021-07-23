<?php 

// kita extends ke file controller agar dapat menggunakan function Controller
class Home extends Controller{
    public function index()
    {
        // kita jalankan function view nya dan mengirimkan parameter file yang dituju .
        // kirimkan data untuk titlenya
        $data['title'] = 'Home';
        $data['active'] = 'active home';
        
        // memanggil nama dari model yang nama filenya User_model dan jalankan function getUser 
        $data['nama'] = $this->model('User_model')->getUser();
        
        $this->view('template/header',$data);
        $this->view('index',$data);
        $this->view('template/footer'); 
    }
}