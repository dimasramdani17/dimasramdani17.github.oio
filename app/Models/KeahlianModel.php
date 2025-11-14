<?php

namespace App\Models;

use CodeIgniter\Model;

class KeahlianModel extends Model
{
    protected $table            = 'keahlian';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama_keahlian',
        'tipe',
        'rating'
    ];

    /**
     * Mengambil semua keahlian berdasarkan tipenya (Teknis / Non-Teknis).
     */
    public function getKeahlianByTipe($tipe)
    {
        return $this->where('tipe', $tipe)
                    ->orderBy('rating', 'DESC') // Urutkan berdasarkan rating tertinggi
                    ->findAll();
    }

    /**
     * Mengambil semua keahlian (untuk statistik atau daftar lengkap).
     */
    public function getAllKeahlian()
    {
        return $this->findAll();
    }
}
