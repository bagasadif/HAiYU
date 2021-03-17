<?php

namespace App\Models;

use CodeIgniter\Model;

class M_userProfile extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';


    protected $allowedFields = ['email', 'username', 'nama', 'jenis_kelamin', 'tanggal_lahir'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getUser($email = false)
    {
        if ($email == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['email' => $email]);
        }
    }
    public function getDataUser($email)
    {
        $builder = $this->db->table($this->table);
        $builder->where('email', $email);
        $log = $builder->get()->getRow();

        return $log;
    }
    public function updateUser($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
    public function deleteStudent($email)
    {
        $query = $this->db->table($this->table)->delete(array('email' => $email));
        return $query;
    }
    public function deleteBelajar($id_siswa)
    {
        $query = $this->db->table('belajar')->delete(['id_siswa' => $id_siswa]);
        return $query;
    }
}
