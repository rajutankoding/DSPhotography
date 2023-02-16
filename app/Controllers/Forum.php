<?php

namespace App\Controllers;

use App\Models\ForumModel;
use App\Models\KomentarModel;
use App\Models\UserModel;

class Forum extends BaseController
{
    protected $order, $uri, $request, $db, $builder;
    protected $forumModel;
    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('forum_topik');
        $this->forumModel = new ForumModel();
    }

    public function index()
    {
        $data = [
            'forum_topik' => $this->forumModel->findAll(),
            'cart' => \Config\Services::cart()
        ];

        return view('forum/index', $data);
    }

    public function detail($id)
    {
        $forum_topik = new ForumModel();
        $forum_komentar = new KomentarModel();
        // $id = $this->request->uri->getSegment(3);

        $this->builder->select('forum_topik.*');
        $this->builder->select('users.username, users.user_image');
        $this->builder->join('users', 'users.id = forum_topik.user_id');
        $this->builder->join('forum_komentar', 'forum_komentar.user_id = forum_topik.user_id');
        $this->builder->where('forum_topik.id', $id);
        $query = $this->builder->get();

        $data = [
            'cart' => \Config\Services::cart(),
            'forum' => $query->getResult(),
            'join' => $forum_topik->ambilKomentar($id),
        ];

        return view('forum/detail', $data);
    }

    public function tmbh_forum()
    {
        $forum = new ForumModel;
        $data = [
            'forum_topik' => $this->forumModel->getforum(),
            'cart' => \Config\Services::cart(),
        ];

        return view('forum/tmbh_topik', $data);
    }

    public function tambah_topik()
    {
        $forum = new ForumModel();
        $data = [
            'user_id' => $_POST['user_id'],
            'judul'   => $_POST['judul_topik'],
            'penulis'   => $_POST['penulis'],
        ];

        $forum->insert($data);
        if ($forum) {
            return redirect()->to('index');
        }
    }

    public function tambah_komen()
    {
        $forum = new KomentarModel();
        $data = [
            'user_id' => $_POST['user_id'],
            'nama_user'   => $_POST['penulis'],
            'id_topik'   => $_POST['topik'],
            'isi'   => $_POST['isi'],
        ];

        $forum->insert($data);
        if ($forum) {
            return redirect()->to('detail/' . $_POST['topik']);
        }
    }

    public function tambahtopik()
    {
        $forumModel = new ForumModel();
        $data = array(
            'judul' => $this->input->post('judul'),
            'user_id' => $_POST[user()->id],
            'penulis'    => $_POST[user()->username],
        );
        $forumModel->insert($data);

        $komen = $this->input->post('komen');
        //mendapatkan id product
        $id_topik = $forumModel->insert_id();
        foreach ($komen as $row) {
            $data = array(
                'id_topik' => $id_topik,
                'user_id' => $_POST[user()->id],
                'isi' => $row,
            );
            $forumModel->insert($data);
        }

        redirect('forum/index');
    }
}
