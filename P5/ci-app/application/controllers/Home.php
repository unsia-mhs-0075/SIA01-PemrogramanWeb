<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Controller Home (Pertemuan 5 - CodeIgniter 3)
 * Mengirim data sederhana dari controller ke view.
 */
class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Mahasiswa';
        $data['nama']  = 'Andi';

        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
