<?php

namespace App\Controllers;

// Memanggil semua model yang dibutuhkan
use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\KeahlianModel;

class Cv extends BaseController
{
    protected $biodataModel;
    protected $pendidikanModel;
    protected $pengalamanModel;
    protected $keahlianModel;

    // __construct() akan dipanggil setiap kali Controller Cv dibuka
    public function __construct()
    {
        // Membuat instance dari setiap model
        $this->biodataModel = new BiodataModel();
        $this->pendidikanModel = new PendidikanModel();
        $this->pengalamanModel = new PengalamanModel();
        $this->keahlianModel = new KeahlianModel();
    }

    /**
     * Method untuk Halaman Utama (Home)
     * URL: /
     */
    public function index()
    {
        // Menyiapkan data untuk dikirim ke view home
        $data = [
            'page' => 'home', // Penanda untuk link nav-active
            'title' => 'Home',
            'biodata' => $this->biodataModel->getBiodata(),

            // Data untuk pratinjau di halaman home
            'pendidikan_terbaru' => $this->pendidikanModel->getPendidikanTerbaru(2), // Ambil 2 terbaru
            'pengalaman_terbaru' => $this->pengalamanModel->getPengalamanTerbaru(2), // Ambil 2 terbaru
            'keahlian_teknis' => $this->keahlianModel->getKeahlianByTipe('Teknis'), // Ambil semua Teknis
            'keahlian_non_teknis' => $this->keahlianModel->getKeahlianByTipe('Non-Teknis'), // Ambil semua Non-Teknis

            // Data untuk 'Stats Section'
            'stats' => [
                'total_pengalaman' => count($this->pengalamanModel->getAllPengalaman()),
                'total_pendidikan' => count($this->pendidikanModel->getAllPendidikan()),
                'total_keahlian_teknis' => count($this->keahlianModel->getKeahlianByTipe('Teknis')),
                'total_keahlian_non_teknis' => count($this->keahlianModel->getKeahlianByTipe('Non-Teknis')),
            ]
        ];

        // Memuat view 'home.php' dan mengirimkan $data
        return view('pages/home', $data);
    }

    /**
     * Method untuk Halaman Pendidikan
     * URL: /pendidikan
     */
    public function pendidikan()
    {
        $data = [
            'page' => 'pendidikan',
            'title' => 'Riwayat Pendidikan',
            'biodata' => $this->biodataModel->getBiodata(),
            'pendidikan_list' => $this->pendidikanModel->getAllPendidikan()
        ];

        return view('pages/pendidikan', $data);
    }

    /**
     * Method untuk Halaman Pengalaman
     * URL: /pengalaman
     */
    public function pengalaman()
    {
        $data = [
            'page' => 'pengalaman',
            'title' => 'Riwayat Pengalaman',
            'biodata' => $this->biodataModel->getBiodata(),
            'pengalaman_list' => $this->pengalamanModel->getAllPengalaman()
        ];

        return view('pages/pengalaman', $data);
    }

    /**
     * Method untuk Halaman Keahlian
     * URL: /keahlian
     */
    public function keahlian()
    {
        $data = [
            'page' => 'keahlian',
            'title' => 'Detail Keahlian',
            'biodata' => $this->biodataModel->getBiodata(),
            'keahlian_teknis' => $this->keahlianModel->getKeahlianByTipe('Teknis'),
            'keahlian_non_teknis' => $this->keahlianModel->getKeahlianByTipe('Non-Teknis')
        ];

        return view('pages/keahlian', $data);
    }
}
