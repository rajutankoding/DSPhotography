<?php

namespace App\Models;

use CodeIgniter\Model;

class TglpModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'tgl_pesanan';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['id_brg', 'id', 'id_user', 'barang', 'nama', 'wa', 'harga', 'no_pesanan', 'tgl_pesan', 'tgl_kembali', 'status'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	// protected $validationRules      = ['tgl_pesan', 'id_brg' => 'required|matches[tgl_pesan]', '[id_brg'];
	// protected $validationMessages   = ['tgl_pesan' => [
	// 	'required'    => 'Maaf barang ini sudah dipesan pada tgl tersebut',
	// ],];
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

	function getTanggal($id = true)
	{
		if ($id = true) {
			// return $this->findAll();
			return $this->where(['id_user' => $id])->findall();
		}

		return $this->where(['id_user' => $id])->first();
	}

	public function cari($keyword)
	{
		// $builder = $this->db->table($this->table);
		// $builder->like('tgl_pesan', $keyword);
		// $builder->like('tgl_kembali', $keyword);
		// $query = $builder->get();
		// return $query->getResultArray();

		// $builder = $this->db->table('barang');
		// $builder->select('barang.*');
		// $builder->select('tgl_pesanan.*');
		// $builder->select('users.username, users.fullname');
		// $builder->join('tgl_pesanan', 'tgl_pesanan.id_brg = barang.id');
		// $builder->join('tgl_pesanan', 'tgl_pesanan.id_brg = users.id');
		// $query = $builder->get();


		return $this->table('tgl_pesanan')->like('no_pesanan', $keyword);
	}

	public function ambilPesanan($id)
	{
		$builder = $this->db->table('barang');
		$builder->select('barang.*');
		$builder->select('tgl_pesanan.*');
		$builder->join('tgl_pesanan', 'tgl_pesanan.id_brg = barang.id');
		$builder->where('tgl_pesanan.id_user', $id);
		$query = $builder->get();
		return $query->getResultArray();
	}
	public function ambilData()
	{

		return $this->findAll();
	}

	public function updateStatus($data)
	{
		$builder = $this->db->table($this->table);
		return $builder->update($data);
	}

	function hapus_data($where, $table)
	{
		$this->db->table('tgl_pesanan')->where($where);
	}

	function updateData($data, $id)
	{
		return $this->db->table('tgl_pesanan')->update($data, ['id' => $id]);
	}
}
