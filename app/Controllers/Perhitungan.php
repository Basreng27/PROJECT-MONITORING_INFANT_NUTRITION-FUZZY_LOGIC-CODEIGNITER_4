<?php

namespace App\Controllers;

use App\Models\Balita_model;
use App\Models\Bb_U_model;
use App\Models\Pb_U_model;
use App\Models\Bb_Pb_model;
use App\Models\Hasil_model;
use App\Models\Data_model;

class Perhitungan extends BaseController
{
    protected $BalitaModel;
    protected $Bb_UModel;
    protected $Pb_UModel;
    protected $Bb_PbModel;
    protected $Hasil_Model;
    protected $DataModel;

    public function __construct()
    {
        $this->BalitaModel = new Balita_model();
        $this->Bb_UModel = new Bb_U_model();
        $this->Pb_UModel = new Pb_U_model();
        $this->Bb_PbModel = new Bb_Pb_model();
        $this->Hasil_Model = new Hasil_model();
        $this->DataModel = new Data_model();
    }

    public function prosesHitung($id_data)
    {
        if (session()->get('stat') != 'login-monitoring') {
            return redirect('/');
        }

        // $balita = $this->BalitaModel->find($id_balita);
        $dataAntro = $this->DataModel->find($id_data);
        $balita = $this->BalitaModel->find($dataAntro['id_balita']);

        $bb_u = $this->Bb_UModel->where(['umur_bb_u' => round($dataAntro['umur']), 'id_jk_bb_u' => $balita['id_jk_balita']])->findAll();
        if (!empty($bb_u)) {
            if ($dataAntro['berat'] <= $bb_u[0]['min_3_sd']) {
                $status_bb_u = "Berat Badan Sangat kurang";
            } elseif ($dataAntro['berat'] >= $bb_u[0]['min_3_sd'] && $dataAntro['berat'] <= $bb_u[0]['min_2_sd']) {
                $status_bb_u = "Berat Badan kurang";
            } elseif ($dataAntro['berat'] >= $bb_u[0]['min_2_sd'] && $dataAntro['berat'] < $bb_u[0]['plus_1_sd']) {
                $status_bb_u = "Berat Badan Normal";
            } elseif ($dataAntro['berat'] >= $bb_u[0]['plus_1_sd']) {
                $status_bb_u = "Berat Badan Berlebih";
            } else {
                $status_bb_u = "Data Tidak Ditemukan";
            }
        } else {
            session()->setFlashdata('bbTidakAda', 'Data gagal ditambahkan');
            return redirect()->to('/perhitungan');
        }

        $pb_u = $this->Pb_UModel->where(['umur_pb_u' => round($dataAntro['umur']), 'id_jk_pb_u' => $balita['id_jk_balita']])->findAll();
        if (!empty($pb_u)) {
            if ($dataAntro['tinggi'] <= $pb_u[0]['min_3_sd']) {
                $status_pb_u = "Sangat Pendek";
            } elseif ($dataAntro['tinggi'] >= $pb_u[0]['min_3_sd'] && $dataAntro['tinggi'] <= $pb_u[0]['min_2_sd']) {
                $status_pb_u = "Pendek";
            } elseif ($dataAntro['tinggi'] >= $pb_u[0]['min_2_sd'] && $dataAntro['tinggi'] < $pb_u[0]['plus_3_sd']) {
                $status_pb_u = "Normal";
            } elseif ($dataAntro['tinggi'] >= $pb_u[0]['plus_3_sd']) {
                $status_pb_u = "Tinggi";
            } else {
                $status_pb_u = "Data Tidak Ditemukan";
            }
        } else {
            session()->setFlashdata('uTidakAda', 'Data gagal ditambahkan');
            return redirect()->to('/perhitungan');
        }

        if (round($dataAntro['umur']) >= 0 && round($dataAntro['umur']) <= 24) {
            $kategori = 1;
        } elseif (round($dataAntro['umur']) > 24 && round($dataAntro['umur']) <= 60) {
            $kategori = 2;
        } else {
            session()->setFlashdata('kategoriTidakAda', 'Data gagal ditambahkan');
            return redirect()->to('/perhitungan');
        }

        $bb_pb = $this->Bb_PbModel->where(['panjang_badan_bb_pb' => round($dataAntro['tinggi']), 'id_jk_bb_pb' => $balita['id_jk_balita'], 'kategori_bb_pb' => $kategori])->findAll();
        if (!empty($bb_pb)) {
            if ($dataAntro['berat'] <= $bb_pb[0]['min_3_sd']) {
                $status_bb_pb = "Gizi Buruk";
            } elseif ($dataAntro['berat'] >= $bb_pb[0]['min_3_sd'] && $dataAntro['berat'] <= $bb_pb[0]['min_2_sd']) {
                $status_bb_pb = "Gizi Kurang";
            } elseif ($dataAntro['berat'] >= $bb_pb[0]['min_2_sd'] && $dataAntro['berat'] < $bb_pb[0]['plus_1_sd']) {
                $status_bb_pb = "Gizi Baik (Normal)";
            } elseif ($dataAntro['berat'] >= $bb_pb[0]['plus_1_sd'] && $dataAntro['berat'] > $bb_pb[0]['plus_2_sd']) {
                $status_bb_pb = "Berisiko Gizi Lebih";
            } elseif ($dataAntro['berat'] >= $bb_pb[0]['plus_2_sd'] && $dataAntro['berat'] > $bb_pb[0]['plus_3_sd']) {
                $status_bb_pb = "Gizi Lebih";
            } elseif ($dataAntro['berat'] >= $bb_pb[0]['plus_3_sd']) {
                $status_bb_pb = "Obesitas Lebih";
            } else {
                $status_bb_pb = "Data Tidak Ditemukan";
            }
        } else {
            session()->setFlashdata('pbTidakAda', 'Data gagal ditambahkan');
            return redirect()->to('/perhitungan');
        }

        $this->Hasil_Model->save([
            'id_balita' => $dataAntro['id_balita'],
            'status_bb_u' => $status_bb_u,
            'status_pb_u' => $status_pb_u,
            'status_bb_pb' => $status_bb_pb,
            'id_data' => $id_data,
        ]);

        session()->setFlashdata('berhasil', 'data berhasil di hitung');
        return redirect()->to('/perhitungan');
    }
}
