<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'riwayat';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_user', 'id_pesanan', 'tanggal', 'pelanggan', 'email', 'barang', 'jumlah_brg', 'tgl_selesai', 'harga', 'status'];

	// Dates
	protected $useTimestamps        = false;
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


	public function add($data)
	{
		$builder = $this->db->table('riwayat');
		return $builder->insert($data);
	}
}
