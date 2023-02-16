<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    protected $db, $builder;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index($id = 0)
    {
        $this->builder->select('users.id as userid, username, email, fullname, user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data = [
            'user' => $query->getRow(),
            'title' => 'My Profile',
            'cart' => \Config\Services::cart()
        ];
        return view('user/index', $data);
    }

    public function tambahuser()
    {
        $user = new UserModel();
        $data = $user->getUser();

        return view('barang/tambah_brg', compact('data'));
    }

    public function pesanan()
    {
        $data['title'] = 'DS Photography';
        return view('user/pesanan', $data);
    }
    public function editprofile()
    {
        $data = [
            'title' => 'DS Photography',
            'cart' => \Config\Services::cart()
        ];

        return view('user/editprofile', $data);
    }

    public function updateUser()
    {
        $upusers = new UserModel();
        $data = [
            'username' => $_POST['username'],
            'fullname' => $_POST['namalengkap'],
            'email' => $_POST['inputemail'],
            'password_hash' => $_POST['password']
        ];
        $upusers->update($data);

        return redirect()->to('/');
    }

    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]
        ]))
            session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }

    function edit($id)
    {
        helper('form');
        $dataUser = $this->users->find($id);
        if (empty($dataUser)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data User Tidak Ditemukan !');
        }
        $data['user'] = $dataUser;
        return view('user/editprofile', $data);
    }

    public function editdata($id)
    {
        $data = [
            'id' => $id,
            'username' => $_POST['username'],
            'fullname' => $_POST['namalengkap'],
            'email' => $_POST['inputemail'],
            'no_wa' => $_POST['no_wa'],
            'password_hash' => $_POST['password'],
        ];
        $user = new UserModel();

        $update = $user->editdata($data, $id);

        if ($update) {
            return redirect()->to('/user');
        }
    }

    public function update()
    {
        $user = new UserModel();
        $data = [
            'username' => $_POST['username'],
            'namalengkap' => $_POST['namalengkap'],
            'inputemail' => $_POST['inputemail'],
            'password' => $_POST['password']
        ];

        $user->update($data);

        return redirect()->to('user/editprofile');
    }
}
