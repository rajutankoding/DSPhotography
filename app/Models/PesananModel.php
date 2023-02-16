<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'barang', 'jumlah_brg', 'harga', 'tgl_selesai', 'status'];

    public function getPesanan($id = true)
    {
        if ($id = true) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function pesananUser()
    {
        $builder = $this->db->table('pesanan');
        // $builder->select('*');
        $builder->join('users', 'users.id = pesanan.id_user');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function tambahPesanan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    function editdata($data, $id)
    {
        return $this->db->table('users')->update($data, ['id' => $id]);
    }

    function perbarui($id)
    {
        return $this->db->table('barang')->update(['id' => $id]);
    }
}
