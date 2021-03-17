<?php

namespace App\Models;

use CodeIgniter\Model;

class M_belajar extends Model
{
    protected $table = 'belajar';

    protected $allowedFields = ['id_siswa', 'id_mapel', 'mid_test', 'final_test'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function saveBelajar($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    function get_data_belajar($id_siswa, $id_mapel, $table)
    {
        $builder = $this->db->table($table);
        $builder->where('id_siswa', $id_siswa);
        $builder->where('id_mapel', $id_mapel);
        $log = $builder->get()->getRow();

        return $log;
    }

    public function deleteBelajar($id_siswa, $id_mapel)
    {
        $query = $this->db->table($this->table)->delete(['id_siswa' => $id_siswa, 'id_mapel' => $id_mapel]);
        return $query;
    }

    public function saveNilai($data, $id_siswa, $id_mapel)
    {
        $query = $this->db->table($this->table)->update($data, ['id_siswa' => $id_siswa, 'id_mapel' => $id_mapel]);
        return $query;
    }
}
