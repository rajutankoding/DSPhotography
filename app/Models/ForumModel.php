<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'forum_topik';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDelete        = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['judul', 'user_id', 'penulis', 'id_topik'];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];


    public function getforum()
    {
        return $this->db->table('forum_topik')
            ->join('forum_komentar', 'forum_komentar.id=forum_topik.id')
            //  ->join('jurusan', 'jurusan.IDJurusan=siswa.IDJurusan')
            ->get()->getResultArray();
    }

    // public function getForum()
    // {
    //     // if ($id_komentar = true) {
    //     //     return $this->findAll();
    //     // }

    //     // return $this->where(['id_komentar' => $id_komentar])->first();


    //     return $this->db->table('forum_komentar')
    //         ->join('forum_topik', 'forum_topik.id_topik=form_komentar.id_topik')
    //         ->get()->getResultArray();
    // }

    // public function tambahForum($data)
    // {
    //     $builder = $this->db->table($this->table);
    //     return $builder->insert($data);
    // }

    // public function ambilKomentar($id)
    // {
    //     $builder = $this->db->table('forum_topik');
    //     $builder->select('forum_topik.*');
    //     $builder->select('forum_komentar.*');
    //     $builder->join('forum_komentar', 'forum_komentar.id_topik = forum_topik.id');
    //     $builder->join('users', 'users.id = forum_komentar.user_id');
    //     $builder->where('forum_topik.id', $id);
    //     $query = $builder->get();
    //     return $query->getResultArray();
    // }
    public function ambilKomentar($id)
    {
        $builder = $this->db->table('forum_komentar');
        $builder->select('forum_komentar.*');
        $builder->select('users.user_image');
        $builder->join('users', 'users.id = forum_komentar.user_id');
        $builder->where('forum_komentar.id_topik', $id);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function ambilJudul()
    {
        $builder = $this->db->table('forum_topik');
        $builder->select('forum_topik.judul');
        $builder->select('users.user_image');
        $builder->join('users', 'users.id = forum_topik.user_id');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function tambahTopik($data)
    {
        $builder = $this->db->table('forum_topik');
        return $builder->insert($data);
    }
    public function tambahKomentar($data)
    {
        $builder = $this->db->table('forum_Komentar');
        return $builder->insert($data);
    }

    public function getTopik($id_komentar = true)
    {
        if ($id_komentar = true) {
            return $this->findAll();
        }

        return $this->where(['id' => $id_komentar])->first();
    }
    public function getKomentar($id_topik = true)
    {
        if ($id_topik = true) {
            return $this->findAll();
        }

        return $this->where(['id' => $id_topik])->first();
    }
}
