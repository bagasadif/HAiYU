<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'login';
    protected $primaryKey = 'email';

    protected $allowedFields = ['email', 'username', 'password', 'level'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function saveUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function saveSiswa($data)
    {
        $query = $this->db->table('siswa')->insert($data);
        return $query;
    }

    public function savePengajar($data)
    {
        $query = $this->db->table('pengajar')->insert($data);
        return $query;
    }
    public function getData($username)
    {
        $builder = $this->db->table('login');
        $builder->where('username', $username);
        $log = $builder->get()->getRow();

        return $log;
    }
    function get_data_login($email, $username, $table)
    {
        $builder = $this->db->table($table);
        $builder->where('email', $email);
        $log = $builder->get()->getRow();

        if ($log === NULL) {
            $builder = $this->db->table($table);
            $builder->where('username', $username);
            $log = $builder->get()->getRow();
        }

        return $log;
    }

    function get_data_siswa($email)
    {
        $builder = $this->db->table('siswa');
        $builder->where('email', $email);
        $log = $builder->get()->getRow();

        return $log;
    }

    function get_data_pengajar($email)
    {
        $builder = $this->db->table('pengajar');
        $builder->where('email', $email);
        $log = $builder->get()->getRow();

        return $log;
    }
    function deleteAccount($email)
    {
        $query = $this->db->table($this->table)->delete(array('email' => $email));
        return $query;
    }
}
