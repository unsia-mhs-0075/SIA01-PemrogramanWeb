<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Model Mahasiswa (Pertemuan 5 - CodeIgniter 3)
 * Mengambil data dari tabel mahasiswa menggunakan Query Builder.
 */
class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
}
