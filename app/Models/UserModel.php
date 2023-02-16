<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $premarykey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['email', 'username', 'no_wa', 'fullname', 'user_image', 'password_hash'];

    public function updateUser($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->update($data);
    }

    function ambildata($id)
    {
        return $this->db->table('users')->getWhere(['users' => $id]);
    }

    function editdata($data, $id)
    {
        return $this->db->table('users')->update($data, ['id' => $id]);
    }
}
