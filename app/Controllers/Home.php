<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
	protected $barangModel;
	public function __construct()
	{
		$this->barangModel = new BarangModel();
	}

	public function index()
	{

		$barang = new BarangModel();
		$data = $barang->getBarang();


		return view('public/index', compact('data'));
	}
	// public function login()
	// {
	// 	return view('auth/login');
	// }
	public function register()
	{
		return view('auth/register');
	}
	public function user()
	{
		return view('user/index');
	}
}
