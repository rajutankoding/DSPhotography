<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Pelanggan extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }
    public function index()
    {
        $barang = new BarangModel();
        $data = [
            'barang' => $this->barangModel->getBarang(),
            'cart' => \Config\Services::cart()
        ];

        return view('pelanggan/index', compact('data'));
    }
}
