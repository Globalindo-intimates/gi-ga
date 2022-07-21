<?php

namespace App\Modules\Berita\Controllers;

use App\Controllers\BaseController;
use Exception;
use App\Modules\Berita\Models\BeritaAcaraModel;

class Berita extends BaseController
{
    protected $beritaAcaraModel;

    function __construct()
    {
        $this->beritaAcaraModel = new BeritaAcaraModel();
    }

    function index()
    {
        return view('App\Modules\Berita\Views\berita_acara_view');
    }

    function listBerita()
    {
        $rst['data'] = $this->beritaAcaraModel->getBerita();

        echo json_encode($rst);
    }

    public function show($id_berita = null)
    {
        $data = $this->beritaAcaraModel->where('id_berita', $id_berita)->first();
        if (!$data) {
            $status = 400;
            $error = 'Not Found';
            $msg = 'Berita Acara dengan id ' . $id_berita . ' tidak ditemukan!';
        } else {
            $status = 200;
            $error = null;
            $msg = null;
        }

        $response = [
            'status' => $status,
            'error' => $error,
            'message' => $msg
        ];
        return json_encode($response);
    }

    public function create()
    {
        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'karyawan_ga_id' => $this->request->getVar('karyawan_ga_id'),
            'nik' => $this->request->getVar('nik'),
            'nama_karyawan' => $this->request->getVar('nama_karyawan'),
            'alamat_karyawan' => $this->request->getVar('alamat_karyawan'),
            'department' => $this->request->getVar('department'),
            'detail_berita' => $this->request->getVar('detail_berita'),
            'keterangan_security' => $this->request->getVar('keterangan_security'),
            'nama_saksi' => $this->request->getVar('nama_saksi'),
            'create_date' => date("Y-m-d H:i:s"),

        ];
        $inserted = $this->beritaAcaraModel->insert($data);
        echo json_encode($inserted);
    }

    public function update($id_berita = null)
    {
        $data = $this->request->getRawInput();
        $data['id_berita'] = $id_berita;

        $dataExists = $this->beritaAcaraModel->where('id_berita', $id_berita)->findAll();
        if (!$dataExists) {
            $response = [
                'status' => 400,
                'error' => 'Not Found',
                'message' => 'Berita Acara dengan id ' . $id_berita . ' tidak ditemukan!'
            ];
            echo json_encode($response);
        } else {
            try {
                $this->beritaAcaraModel->save($data);
                $response = [
                    'status' => 200,
                    'error' => null,
                    'message' => 'Berita Acara berhasil diupdate!'
                ];
            } catch (Exception $err) {
                $response = [
                    'status' => 400,
                    'error' => null,
                    'message' => $err->getMessage()
                ];
            }
            echo json_encode($response);
        }
    }

    public function delete($id_berita = null)
    {
        $data = $this->beritaAcaraModel->where('id_berita', $id_berita)->findAll();
        if (!$data) {
            $response = [
                'status' => 400,
                'error' => 'Not Found',
                'message' => 'Berita Acara dengan id ' . $id_berita . ' tidak ditemukan!'
            ];
            echo json_encode($response);
        } else {
            try {
                $this->beritaAcaraModel->delete($id_berita);
                $response = [
                    'status' => 200,
                    'error' => null,
                    'message' => 'Berita Acara berhasil di hapus!'
                ];
            } catch (Exception $err) {
                $response = [
                    'status' => 400,
                    'error' => null,
                    'message' => $err->getMessage()
                ];
            }
            echo json_encode($response);
        }
    }
}