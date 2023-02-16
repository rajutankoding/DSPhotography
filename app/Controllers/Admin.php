<?php

namespace App\Controllers;

use App\Models\PesananModel;

class Admin extends BaseController
{
    protected $pesananModel;
    protected $db, $builder;
    public function __construct()
    {
        $this->pesananModel = new PesananModel();
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();


        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data = [
            'title' => 'User List',
            'users' => $query->getResult(),
            'cart' => \Config\Services::cart()
        ];


        return view('admin/index', $data);
    }

    public function detail($id = 0)
    {
        $data['title'] = 'User Detail';


        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }


    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
            'cart' => \Config\Services::cart()
        ];
        return view('admin/dashboard', $data);
    }

    public function pesananAdmin()
    {
        // $pesanan = new PesananModel();
        $data = [
            'pesanan' => $this->pesananModel->getPesanan(),
            'cart' => \Config\Services::cart()
        ];
        return view('admin/pesanan', $data);
    }

    public function invoice()
    {
        $data['title'] = 'Invoice';
        return view('admin/invoice', $data);
    }

    public function read_mail()
    {
        $data['title'] = 'Pesanan';
        return view('admin/read_mail', $data);
    }

    public function promosi()
    {
        return view('admin/promosi');
    }
}
