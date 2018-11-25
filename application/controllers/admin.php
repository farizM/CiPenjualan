<?php
class admin extends CI_Controller{

  function __construct() {
    parent::__construct();
    $this->load->model('Admin_Model');
    $this->load->helper('url');
  }

  function index(){
    $this->load->view('admin/template/header');
    $this->load->view('admin/index');
    $this->load->view('admin/template/footer');
  }

  public function kelolaKategori(){
    $this->load->view('admin/template/header');
    $dataKategori['tb_kategori'] = $this->Admin_Model->getKategori();
    $this->load->view('admin/kelola_kategori', $dataKategori);
    $this->load->view('admin/template/footer');
  }

  public function dataBarang(){
    $this->load->view('admin/template/header');
    $this->load->view('admin/kelola_barang');
    $this->load->view('admin/template/footer');
  }

  public function addKategori()
  {
    $kategoriNama = $this->input->post('kategori_nama');
    $kategoriValue = array('nama_kategori' => $kategoriNama);
    $this->Admin_Model->addKategori($kategoriValue);
    redirect('admin/kelola-kategori');
  }

  public function deleteKategori($idKategori)
  {
    $where = array('kategori_id' => $idKategori);
    $this->Admin_Model->deleteKategori($where);
    redirect('admin/kelola-kategori');
  }

<<<<<<< HEAD
=======
  public function dataCustomer(){
      $this->load->view('admin/template/header');
      $this->load->view('admin/data_customer');
      $this->load->view('admin/template/footer');
  }

>>>>>>> 3c3248bab670d72b706e92d7b8420471254e5a83
}

?>
