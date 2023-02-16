<?php

namespace App\Controllers;

use App\Models\KomentarModel;

class Komentar extends BaseController
{
    protected $komentarModel;
    public function __construct()
    {
        $this->komentarModel = new KomentarModel();
    }



    public function index()
    {
        // $data['content'] = $this->db->query("SELECT * FROM komentar");
        // $this->load->view('komentar/index', $data);
        $komentar = new KomentarModel;
        $data = [
            'cart' => \Config\Services::cart(),
            'komen' => $this->komentarModel->findAll(),
        ];
        return view('komentar/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'komen' => $this->komentarModel->findAll(),
            'isi' => $this->komentarModel->find($id),
        ];

        return view('komentar/detail', $data);
    }

    public function kirim()
    {
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $pesan   = $this->input->post('isi');
        $this->db->query("INSERT INTO komentar VALUES('','0','$id','$nama','$pesan')");
        redirect('komentar/detail/' . $id);
    }

    public function balas()
    {
        // $id = $this->input->post('id');
        // $nama       = $this->input->post('nama');
        // $pesan       = $this->input->post('pesan');
        // $this->db->query("INSERT INTO komentar VALUES('','$id','$nama','$pesan')");

        $komentar = new komentarModel();

        $data = [
            'id' => $_POST['id'],
            'nama' => $_POST['nama'],
            'pesan' => $_POST['pesan']
        ];
        $komentar->insert($data);


        redirect('komentar/detail/' . $data);
    }
}
