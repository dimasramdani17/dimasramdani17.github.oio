<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table            = 'pengalaman';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'posisi',
        'perusahaan',
        'tipe',
        'tahun_mulai',
        'tahun_selesai',
        'deskripsi'
    ];

    /**
     * Mengambil semua data pengalaman, diurutkan dari ID terbaru (data terbaru).
     */
    public function getAllPengalaman()
    {
        // Mengurutkan berdasarkan ID DESC agar "Sekarang" (data terbaru) muncul di atas
        return $this->orderBy('id', 'DESC')->findAll();
    }

    /**
     * Mengambil beberapa data pengalaman terbaru untuk pratinjau di home.
     */
    public function getPengalamanTerbaru($limit = 2)
    {
        return $this->orderBy('id', 'DESC')->findAll($limit);
    }
}
