<?php

namespace App\Controllers;

use App\Models\PesananModel;
use App\Models\TglpModel;
use App\Models\BarangModel;

class Pesanan extends BaseController
{
    protected $order, $uri, $request, $db, $builder;
    protected $pesananModel;
    protected $riwayatModel;
    protected $tglpModel;

    public function __construct()
    {
        $this->pesananModel = new PesananModel();
        $this->riwayatModel = new PesananModel();
        $this->tglpModel = new TglpModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('barang', 'tgl_pesanan', 'users');
        $this->barangModel = new BarangModel();
        helper('form');
    }

    public function indexadmin()
    {
        $data = [
            'pesanan' => $this->pesananModel->getPesanan(),
        ];

        return view('pesanan/index', $data);
    }
    public function cekdata()
    {
        $tglpesan = new TglpModel();
        $keyword =
            [
                'id_brg' => $_POST['id_brg'],
                'tgl_pesan' => $_POST['dari_tgl'],
                'tgl_kembali' => $_POST['sampai_tgl'],

            ];
        $data['products'] = $tglpesan->get_product_keyword($keyword);
        $this->load->view('search', $data);
    }
    public function tglpesanan()
    {
        $tglpesan = new TglpModel();
        $data = [
            'id_brg' => $_POST['id_brg'],
            'id_user' => $_POST['id_user'],
            'nama' => $_POST['nama'],
            'wa' => $_POST['wa'],
            'no_pesanan' => $_POST['no_pesanan'],
            'barang' => $_POST['barang'],
            'harga' => $_POST['harga'],
            // 'id' => $_POST['id_user'],
            'tgl_pesan' => $_POST['dari_tgl'],
            'tgl_kembali' => $_POST['sampai_tgl'],

        ];
        $tglpesan->insert($data);

        if ($tglpesan) {
            session()->setflashdata('pesan', 'Berhasil ditambahkan.');
            return redirect()->to('/barang/index');
        };
    }

    public function bayar()
    {
        $data = [
            'tanggal' => $this->tglpModel->ambilData(),
        ];

        return view('/admin/pesanan', $data);
    }

    public function bayar1()
    {
        $tglpesan = new TglpModel();
        $id = $_POST['no_pesanan'];

        $this->builder->select('barang.*');
        $this->builder->select('tgl_pesanan.*');
        $this->builder->join('tgl_pesanan', 'tgl_pesanan.id_user = barang.id');

        $this->builder->where('tgl_pesanan.no_pesanan', $id);
        $query = $this->builder->get();
        $data = [
            'tanggal' => $tglpesan->where('no_pesanan', $_POST['no_pesanan'])->findAll(),
            // 'pesanan' => $this->tglpModel->ambilData(),
        ];

        return view('/admin/pesanan', $data);
    }

    public function adminRiwayat()
    {
        // $pesanan = new PesananModel();
        $data = [
            'riwayat' => $this->riwayatModel->findAll(),
            'cart' => \Config\Services::cart()
        ];
        return view('pesanan/adminriwayat', $data);
    }

    public function index()
    {
        // $pesanan = new PesananModel();
        $data = [
            'pesanan' => $this->pesananModel->pesananUser(),
            'cart' => \Config\Services::cart()
        ];

        return view('pesanan/index', $data);
    }

    function status($id)
    {
        $uri = service('uri');
        $id = $uri->getSegment('3');

        $barang = new PesananModel();
        $barang->perbarui($id);

        return view('/');
    }

    public function statuses()
    {
        $pesanan = new PesananModel();
        $data = [
            'pelanggan' => $_POST['pelanggan'],
            'email' => $_POST['inputemail'],
            'barang' => $_POST['barang'],
            'jumlah_brg' => $_POST['jumlah_brg'],
            'harga' => $_POST['harga'],
            'status' => $_POST['status'],
        ];
        $pesanan->update($data);

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $this->tglpModel->delete($id);
        return redirect()->to('/pesanan/bayar');
    }

    public function simpan_invoice()
    {
        $no_invoice = $this->input->post('no_invoice');
        $this->m_invoice->simpan_invoice($no_invoice);
        redirect('admin/pesanan');
    }

    public function invoice()
    {
        return view('pesanan/invoice');
    }

    public function invoiceprint()
    {
        return view('pesanan/invoiceprint');
    }
}
