<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Models\UserModel;
use App\Models\TglpModel;

class Barang extends BaseController
{
    protected $order, $uri, $request, $db, $builder;
    protected $barangModel;
    protected $userModel;
    protected $tglpModel;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('barang', 'tgl_pesanan');
        $this->barangModel = new BarangModel();
        helper('form');
    }
    public function index()
    {
        $data = [
            'barang' => $this->barangModel->getBarang(),
            'cart' => \Config\Services::cart()
        ];

        return view('barang/index', $data);
    }
    public function barangAdmin()
    {
        $barang = new BarangModel();
        $data = $barang->getBarang();

        return view('barang/barangAdmin', compact('data'));
    }

    public function cart($id = 'id_user', $ib = 'id_brg')
    {
        $tglpesan = new TglpModel();
        $barang = new BarangModel;

        $this->builder->select('barang.*');
        $this->builder->select('tgl_pesanan.*');
        $this->builder->join('tgl_pesanan', 'tgl_pesanan.id_user = barang.id');

        $this->builder->where('tgl_pesanan.id_brg', $id);
        $query = $this->builder->get();

        $data = [
            'tanggal' => $tglpesan->where('id_user', $id)->findAll(),
            'pesan' => $query->getResult(),
            'pesanan' => $tglpesan->ambilPesanan($id),
            'cart' => \Config\Services::cart(),
        ];

        return view('barang/cart', $data);
    }

    public function addcart()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $_POST['id'],
            'qty'     => 1,
            'price'   => $_POST['price'],
            'name'    => $_POST['name'],
            'options' => array('gambar' => $_POST['gambar'],)
        ));
        session()->setflashdata('dipesan', 'maaf barang sudah dipesan pada tanggal tersebut.');
        return redirect()->to('/barang/index');
    }

    public function clear($id)
    {
        $data = [
            'id' => $id,
        ];
        $this->tglpModel->delete($data);
        return redirect()->to('/barang/cart');
    }

    public function updatep($id)
    {
        $data = [
            'no_pesanan' => $_POST['no_pesanan'],
        ];
        $this->tglpModel->update($data);
        return redirect()->to('/barang/cart');
    }

    public function tambah_brg()
    {
        $barang = new BarangModel();
        $data = $barang->getBarang();
        return view('barang/tambah_brg', compact('data'));
    }

    public function tambah()
    {
        $barang = new BarangModel();
        $data = [
            'nama_brg' => $_POST['nama_brg'],
            'kategori_brg' => $_POST['kategori_brg'],
            'detail' => $_POST['detail'],
            'foto_brg' => $_POST['foto_brg'], ['name'],
            'harga' => $_POST['harga']
        ];
        $barang->insert($data);
        if ($barang) {
            return redirect()->to('managebarang');
        }
    }

    public function delete($id)
    {
        $this->barangModel->delete($id);
        return redirect()->to('/barang/managebarang');
    }

    public function managebarang()
    {
        $barang = new BarangModel();
        $data = [
            'barang' => $this->barangModel->getBarang(),
            'cart' => \Config\Services::cart()
        ];
        return view('barang/managebarang', $data);
    }

    public function updateBarang()
    {
        $barang = new BarangModel();
        $data = [
            'nama_brg' => $_POST['nama_brg'],
            'harga' => $_POST['harga'],
            'stock_brg' => $_POST['stock_brg'],
            'kategori_brg' => $_POST['kategori_brg'],
            'detail' => $_POST['detail'],
        ];
        $barang->update($data);
        return redirect()->to('barang/managebarang');
    }

    public function editbarang($id)
    {
        $barang = new BarangModel;
        $data['barang'] = $barang->where('id', $id)->first();
        return view('barang/edit_brg', $data);
    }

    public function detail($id)
    {
        $tglpesan = new TglpModel();
        $barang = new BarangModel;
        $data = [
            'barang' => $barang->where('id', $id)->first(),
            'tanggal' => $tglpesan->where('id_brg', $id)->findAll(),
            'cart' => \Config\Services::cart()
        ];
        return view('barang/detail', $data);
    }

    public function promosi($id)
    {
        $barang = new BarangModel;
        $pelanggan = new UserModel;
        $data = [
            'barang' => $barang->where('id', $id)->first(),
            'user' => $pelanggan->where('id', $id)->first(),
        ];


        return view('admin/promosi', $data);
    }

    public function teskirim()
    {
        return view('admin/kirimwa');
    }

    public function kirimp()
    {
        $data = [
            'cart' => \Config\Services::cart(),
            'nomor' => $_POST['nomor'],
            'pesan' => $_POST['pesan_promosi'],
        ];
        return view('admin/terkirimp', $data);
    }
    public function kirim()
    {
        $data = [
            'nomor' => $_POST['nomor'],
            'pesan' => $_POST['pesan_promosi'],
        ];
        return view('admin/terkirim', $data);
    }

    public function send()
    {

        $tujuan = $_POST['nomor'];
        $pesan = $_POST['pesan_promosi'];
        $result = file_get_contents("http://localhost:5000/" . "msg?number" . $tujuan . "&pesan" . $pesan);
        $this->session->setFlashData('message', 'Pesan Telah Terkirim');
        redirect('/');
    }

    public function tes($id)
    {
        $pesanan = new TglpModel();

        $data = [
            'status' => $_POST['status']
        ];
        $pesanan->where($id)->update($data);
    }
    public function updatePesanan($id)
    {
        $pesanan = new TglpModel();
        $data = [
            'id' => $id,
            'status' => $_POST['status'],
        ];
        $pesanan->update($id, $data);
        return redirect()->to('/pesanan/bayar');
    }
}
