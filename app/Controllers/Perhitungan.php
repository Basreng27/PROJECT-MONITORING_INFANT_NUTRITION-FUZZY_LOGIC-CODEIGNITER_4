<?php

namespace App\Controllers;

use App\Models\Balita_model;
use App\Models\Bb_U_model;
use App\Models\Pb_U_model;
use App\Models\Bb_Pb_model;
use App\Models\Hasil_model;

class Perhitungan extends BaseController
{
    protected $BalitaModel;
    protected $Bb_UModel;
    protected $Pb_UModel;
    protected $Bb_PbModel;
    protected $Hasil_Model;

    public function __construct()
    {
        $this->BalitaModel = new Balita_model();
        $this->Bb_UModel = new Bb_U_model();
        $this->Pb_UModel = new Pb_U_model();
        $this->Bb_PbModel = new Bb_Pb_model();
        $this->Hasil_Model = new Hasil_model();
    }

    public function prosesHitung($id_balita)
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        $balita = $this->BalitaModel->find($id_balita);

        $bb_u = $this->Bb_UModel->where(['umur_bb_u' => round($balita['umur']), 'id_jk_bb_u' => $balita['id_jk_balita']])->findAll();
        if (!empty($bb_u)) {
            if ($balita['berat'] <= $bb_u[0]['min_3_sd']) {
                $status_bb_u = "Berat Badan Sangat kurang";
            } elseif ($balita['berat'] >= $bb_u[0]['min_3_sd'] && $balita['berat'] <= $bb_u[0]['min_2_sd']) {
                $status_bb_u = "Berat Badan kurang";
            } elseif ($balita['berat'] >= $bb_u[0]['min_2_sd'] && $balita['berat'] < $bb_u[0]['plus_1_sd']) {
                $status_bb_u = "Berat Badan Normal";
            } elseif ($balita['berat'] >= $bb_u[0]['plus_1_sd']) {
                $status_bb_u = "Berat Badan Berlebih";
            } else {
                $status_bb_u = "Data Tidak Ditemukan";
            }
        } else {
            session()->setFlashdata('bbTidakAda', 'Data gagal ditambahkan');
            return redirect()->to('/perhitungan');
        }

        $pb_u = $this->Pb_UModel->where(['umur_pb_u' => round($balita['umur']), 'id_jk_pb_u' => $balita['id_jk_balita']])->findAll();
        if (!empty($pb_u)) {
            if ($balita['tinggi'] <= $pb_u[0]['min_3_sd']) {
                $status_pb_u = "Sangat Pendek";
            } elseif ($balita['tinggi'] >= $pb_u[0]['min_3_sd'] && $balita['tinggi'] <= $pb_u[0]['min_2_sd']) {
                $status_pb_u = "Pendek";
            } elseif ($balita['tinggi'] >= $pb_u[0]['min_2_sd'] && $balita['tinggi'] < $pb_u[0]['plus_3_sd']) {
                $status_pb_u = "Normal";
            } elseif ($balita['tinggi'] >= $pb_u[0]['plus_3_sd']) {
                $status_pb_u = "Tinggi";
            } else {
                $status_pb_u = "Data Tidak Ditemukan";
            }
        } else {
            session()->setFlashdata('pbTidakAda', 'Data gagal ditambahkan');
            return redirect()->to('/perhitungan');
        }

        if (round($balita['umur']) >= 0 && round($balita['umur']) <= 24) {
            $kategori = 1;
        } elseif (round($balita['umur']) > 24 && round($balita['umur']) <= 60) {
            $kategori = 2;
        } else {
            session()->setFlashdata('kategoriTidakAda', 'Data gagal ditambahkan');
            return redirect()->to('/perhitungan');
        }

        $bb_pb = $this->Bb_PbModel->where(['panjang_badan_bb_pb' => round($balita['tinggi']), 'id_jk_bb_pb' => $balita['id_jk_balita'], 'kategori_bb_pb' => $kategori])->findAll();
        if (!empty($bb_pb)) {
            if ($balita['berat'] <= $bb_pb[0]['min_3_sd']) {
                $status_bb_pb = "Gizi Buruk";
            } elseif ($balita['berat'] >= $bb_pb[0]['min_3_sd'] && $balita['berat'] <= $bb_pb[0]['min_2_sd']) {
                $status_bb_pb = "Gizi Kurang";
            } elseif ($balita['berat'] >= $bb_pb[0]['min_2_sd'] && $balita['berat'] < $bb_pb[0]['plus_1_sd']) {
                $status_bb_pb = "Gizi Baik (Normal)";
            } elseif ($balita['berat'] >= $bb_pb[0]['plus_1_sd'] && $balita['berat'] > $bb_pb[0]['plus_2_sd']) {
                $status_bb_pb = "Berisiko Gizi Lebih";
            } elseif ($balita['berat'] >= $bb_pb[0]['plus_2_sd'] && $balita['berat'] > $bb_pb[0]['plus_3_sd']) {
                $status_bb_pb = "Gizi Lebih";
            } elseif ($balita['berat'] >= $bb_pb[0]['plus_3_sd']) {
                $status_bb_pb = "Obesitas Lebih";
            } else {
                $status_bb_pb = "Data Tidak Ditemukan";
            }
        } else {
            session()->setFlashdata('bbpbTidakAda', 'Data gagal ditambahkan');
            return redirect()->to('/perhitungan');
        }

        $this->Hasil_Model->save([
            'id_balita' => $id_balita,
            'status_bb_u' => $status_bb_u,
            'status_pb_u' => $status_pb_u,
            'status_bb_pb' => $status_bb_pb
        ]);

        session()->setFlashdata('berhasil', 'data berhasil di hitung');
        return redirect()->to('/perhitungan');
    }
}
