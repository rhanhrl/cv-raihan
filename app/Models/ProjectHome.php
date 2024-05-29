<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectHome extends Model
{
    protected $table = 'project';

    public function getAll()
    {
        return $this->db->table($this->table)
            ->get()
            ->getResultArray();
    }
}
