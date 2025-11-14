<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table            = 'pendidikan';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'institusi',
        'jenjang_jurusan',
        'tahun_mulai',
        'tahun_selesai',
        'deskripsi'
    ];

    /**
     * Mengambil semua data pendidikan, diurutkan dari tahun terbaru.
     */
    public function getAllPendidikan()
    {
        return $this->orderBy('id', 'DESC')->findAll(); 
        // Diurutkan berdasarkan ID DESC agar data terbaru muncul di atas
    }

    /**
     * Mengambil beberapa data pendidikan terbaru untuk pratinjau di home.
     */
    public function getPendidikanTerbaru($limit = 2)
    {
        return $this->orderBy('id', 'DESC')->findAll($limit); 
        // Ambil sejumlah data terbaru sesuai limit
    }
}
