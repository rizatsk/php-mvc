<?php 

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['active'] = 'active mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahsiswa();
        $this->view('template/header',$data);
        $this->view('mahasiswa/index',$data);
        $this->view('template/footer');
    }

    public function detail_Mahasiswa($id)
    {
        $data['title'] = 'Data Mahasiswa';
        $data['active'] = 'active mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('template/header',$data);
        $this->view('mahasiswa/detail_Mahasiswa',$data);
        $this->view('template/footer');
    }

    public function tambah_Mahasiswa()
    {
        // echo ($this->getMahasiswa());
        if ( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ){
            FlashMessage::setFlash('check-circle-fill','Berhasil','Di tambahkan', 'success');
            header('Location:' .URL. '/mahasiswa');
            exit;
        }else{
            FlashMessage::setFlash('exclamation-triangle-fill','Gagal','Di tambahkan', 'danger');
            header('Location:' .URL. '/mahasiswa');
            exit;
        }
        
    }

    public function delete_Mahasiswa($id)
    {
        if ( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ){
            FlashMessage::setFlash('check-circle-fill','Berhasil','Di Hapus', 'success');
            header('Location:' .URL. '/mahasiswa');
            exit;
        }else{
            FlashMessage::setFlash('exclamation-triangle-fill','Gagal','Di Hapus', 'danger');
            header('Location:' .URL. '/mahasiswa');
            exit;
        }
    }

    public function getEdit()
    {
        // kita tangkap dulu data yang dikirimkan melalui post yaitu berupa id
        $id = $_POST['id'];
        // tampilkan dan kita rubah datanya menjadi json
        echo json_encode( $this->model('Mahasiswa_model')->getMahasiswaById($id) );
    }

    public function edit_Mahasiswa()
    {
        if ( $this->model('Mahasiswa_model')->editDataMahasiswa($_POST) > 0 ){
            FlashMessage::setFlash('check-circle-fill','Berhasil','Di Edit', 'success');
            header('Location:' .URL. '/mahasiswa');
            exit;
        }else{
            FlashMessage::setFlash('exclamation-triangle-fill','Gagal','Di Edit', 'danger');
            header('Location:' .URL. '/mahasiswa');
            exit;
        }
    }

    public function searchData()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['active'] = 'active mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->searchDataMahsiswa();
        $this->view('template/header',$data);
        $this->view('mahasiswa/index',$data);
        $this->view('template/footer');
    }

}
