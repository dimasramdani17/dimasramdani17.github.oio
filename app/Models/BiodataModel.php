<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table            = 'biodata';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'nama_lengkap',
        'gelar_profesional',
        'tentang_saya',
        'email',
        'telepon',
        'linkedin',
        'github'
    ];

    /**
     * Mengambil satu-satunya baris data biodata.
     * Kita asumsikan biodata hanya ada 1 baris dengan ID=1.
     */
    public function getBiodata()
    {
        return $this->find(1);
    }
}
