<?php

namespace App\Models;

use CodeIgniter\Model;

class M_teacherProfile extends Model
{
    protected $table = 'pengajar';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'username', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'telepon', 'foto'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getTeacher($email = false)
    {
        if ($email == false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['email' => $email]);
        }
    }
    public function getAllTeacher()
    {
        return $this->db->table('pengajar')
            ->join('mapel', 'mapel.id_pengajar=pengajar.id')
            ->get()->getResultArray();
    }
    public function updateTeacher($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
}
