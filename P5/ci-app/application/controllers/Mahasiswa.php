<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Controller Mahasiswa (Pertemuan 5 - CodeIgniter 3)
 * Memuat model, mengambil data mahasiswa, mengirimnya ke view.
 */
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mahasiswa_model');

        $data['mahasiswa'] =
            $this->Mahasiswa_model->getAllMahasiswa();

        $this->load->view('templates/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
}
