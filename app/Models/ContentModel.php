<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table = 'home_content'; // Nama tabel database
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image'];

    public function getContent()
    {
        return $this->findAll(); // Mengambil semua data dari tabel
    }
}
