<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContentModel;

class Admin extends Controller
{
    // Method untuk menampilkan halaman edit konten
    public function editHomeContent()
    {
        $model = new ContentModel();
        $data['content'] = $model->findAll(); // Mengambil semua data konten dari model

        return view('edit_home_content', $data); // Mengirim data ke view
    }

    // Method untuk memperbarui konten home
    public function updateHomeContent()
    {
        $model = new ContentModel();
        $id = $this->request->getPost('id');
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');

        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);
        } else {
            $newName = $this->request->getPost('existing_image'); // Jika tidak ada gambar baru, gunakan yang lama
        }

        $data = [
            'title' => $title,
            'description' => $description,
            'image' => $newName
        ];

        if ($id) {
            $model->update($id, $data);
        } else {
            $model->insert($data);
        }

        return redirect()->to('/admin/editHomeContent');
    }
}
