<?php

namespace App\Models;

use CodeIgniter\Model;

class M_materi extends Model
{
    protected $table = 'materi';

    protected $allowedFields = ['id', 'judul', 'konten', 'id_mapel'];

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';

    // getMateri by id_materi
    function getMateri($id_materi){
        $builder = $this->db->table($this->table);
        $builder->where('id', $id_materi);
        
        $log = $builder->get()->getRow();

        return $log;
    }

    // getMateri by id_mapel and chapter
    function get_Materi($id_mapel, $chapter){
        $builder = $this->db->table($this->table);
        $builder->where('id_mapel', $id_mapel);
        $builder->where('chapter', $chapter);
        
        $log = $builder->get()->getRow();

        return $log;
    }

    // update Materi by id_materi
    function updateMateri($data, $id){
        $query = $this->db->table($this->table)->update($data, ['id' => $id]);
        return $query;
    }

    // update Materi by id_mapel and chapter
    function update_Materi($data, $id_mapel, $chapter){
        $query = $this->db->table($this->table)->update($data, ['id_mapel' => $id_mapel, 'chapter' => $chapter]);
        return $query;
    }

    function saveMateri($data){    
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function deleteMateri($id, $id_mapel)
    {
        $query = $this->db->table($this->table)->delete(['id' => $id, 'id_mapel' => $id_mapel]);
        return $query;
    }
}