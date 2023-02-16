<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $useTimestamps = true;
    protected $premarykey = 'id';
    protected $allowedFields = ['nama_brg', 'kategori_brg', 'detail', 'harga'];

    public function getBarang($id = true)
    {
        if ($id = true) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function edit($id = true)
    {
        if ($id = true) {
            return $this->findAll($id);
        }

        return $this->where(['id' => $id])->first();
    }

    public function tambahBarang($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    function hapusdata($id)
    {
        return $this->db->table('barang')->delete(['id' => $id]);
    }
    // function perbarui($data, $id)
    // {
    //     return $this->db->table('barang')->update($data, ['id' => $id]);
    // }
}
