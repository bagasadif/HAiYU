<?php

namespace App\Models;

use CodeIgniter\Model;

class M_mapel extends Model
{
    protected $table = 'mapel';

    protected $allowedFields = ['id', 'nama', 'id_pengajar', 'final_test'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    function get_id_pengajar($id_mapel)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id_mapel);
        
        $id_pengajar = $builder->get()->getRow()->id_pengajar;

        return $id_pengajar;
    }

    function get_data_pengajar($id_mapel)
    {
        $builder = $this->db->table('pengajar');
        $builder->where('id', $this->get_id_pengajar($id_mapel));
        $log = $builder->get()->getRow();

        return $log;
    }

    // get mapel by id_pengajar
    function get_mapel($id_pengajar)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_pengajar', $id_pengajar);
        $log = $builder->get()->getRow();
        
        return $log;
    }

    // get mapel by id mapel
    function getMapel($id_mapel)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id', $id_mapel);
        $log = $builder->get()->getRow();
        
        return $log;
    }
}