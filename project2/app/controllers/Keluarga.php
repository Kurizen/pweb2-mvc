<?php 

class Keluarga extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Keluarga';
        $data['klg'] = $this->model('Keluarga_model')->getAllKeluarga();
        $this->view('templates/header', $data);
        $this->view('keluarga/index', $data);
        $this->view('templates/footer');
    }

    public function detail($no_KK)
    {
        $data['judul'] = 'Detail Keluarga';
        $data['klg'] = $this->model('Keluarga_model')->getkeluargaById($no_KK);
        $this->view('templates/header', $data);
        $this->view('keluarga/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Keluarga_model')->tambahDataKeluarga($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/keluarga');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/keluarga');
            exit;
        }
    }

    public function hapus($no_KK)
    {
        if( $this->model('Keluarga_model')->hapusDataKeluarga($no_KK) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/keluarga');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/keluarga');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Keluarga_model')->getKeluargaById($_POST['no_KK']));
    }

    public function ubah()
    {
        if( $this->model('Keluarga_model')->ubahDataKeluarga($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/keluarga');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/keluarga');
            exit;
        } 
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Keluarga';
        $data['klg'] = $this->model('Keluarga_model')->cariDataKeluarga();
        $this->view('templates/header', $data);
        $this->view('keluarga/index', $data);
        $this->view('templates/footer');
    }

}