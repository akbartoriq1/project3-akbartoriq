<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContentModel;

class Home extends Controller
{
    public function index()
    {
        $model = new ContentModel();
        $data['content'] = $model->findAll(); // Mengambil semua data konten dari model

        return view('home', $data); // Mengirim data ke view
    }
}
