<?php

namespace App\Modules\News\Models;

use CodeIgniter\Model;

class BeritaAcaraModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $allowedFields = ['id_berita', 'karyawan_ga_id', 'nik', 'nama_karyawan', 'alamat_karyawan', 'department', 'detail_berita', 'keterangan_security', 'nama_saksi', 'create_date'];

    public function getBerita()
    {
        $builder = $this->table('berita');
        $builder->select(
            'berita.*, karyawan_ga.nama_lengkap'
        );
        $builder->join('karyawan_ga', 'karyawan_ga.id = berita.karyawan_ga_id');
        $query = $builder->get();

        return $query->getResultArray();
    }
}