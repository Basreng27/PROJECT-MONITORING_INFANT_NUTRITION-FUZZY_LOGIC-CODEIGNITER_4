<?php

namespace App\Models;

use CodeIgniter\Model;

class Balita_model extends Model
{
    protected $table = 'balita';
    protected $primaryKey = 'id_balita';
    protected $useTimestamps = false;
    // protected $allowedFields = ['nama_balita', 'id_jk_balita', 'id_ortu', 'umur', 'tinggi', 'berat'];
    protected $allowedFields = [
        'id_balita',
        'nama_balita',
        'id_jk_balita',
        'id_ortu',
        'id_ortu_ibu',
        'nik',
        'anak_ke',
        'bb_lahir',
        'lingkar_lengan',
        'lingkar_kepala',
        'dari_keluarga',
    ];

    public function balitaXortuXbalita()
    {
        // $this->join('ortu', 'balita.id_ortu = ortu.id_ortu')->find();
        $this->select('*, ortu.nama_ortu as bapak, a.nama_ortu as ibu');
        $this->join('ortu', 'balita.id_ortu = ortu.id_ortu');
        $this->join('ortu a', 'balita.id_ortu_ibu = a.id_ortu');
        $this->join('jk', 'jk.id_jk = balita.id_jk_balita');
        return  $this->findAll();
    }

    public function balitaXortuXbalitaXhasil()
    {
        $this->select('*, balita.id_balita AS idBalita');
        $this->join('ortu', 'balita.id_ortu = ortu.id_ortu');
        $this->join('jk', 'jk.id_jk = balita.id_jk_balita');
        $this->join('hasil', 'balita.id_balita = hasil.id_balita', 'LEFT');

        return  $this->findAll();
    }


    public function getAllData()
    {
        return $this->select('  balita.nik AS nik_balita,
                                balita.nama_balita, 
                                balita.anak_ke, 
                                e.umur,
                                e.tinggi,
                                e.berat,
                                e.tanggal,
                                b.jk AS jenis_kelamin,
                                c.nik AS nik_ayah,
                                c.nama_ortu AS nama_ayah,
                                c.no_telpon AS no_ayah,
                                c.alamat AS alamat_ayah,
                                c.pekerjaan AS pekerjaan_ayah,
                                d.nik AS nik_ibu,
                                d.nama_ortu AS nama_ibu,
                                d.no_telpon AS no_ibu,
                                d.alamat AS alamat_ibu,
                                d.pekerjaan AS pekerjaan_ibu,
                                balita.dari_keluarga, 
                                ')
            ->join('jk b', 'balita.id_jk_balita = b.id_jk', 'LEFT')
            ->join('ortu c', 'balita.id_ortu = c.id_ortu', 'LEFT')
            ->join('ortu d', 'balita.id_ortu_ibu = d.id_ortu', 'LEFT')
            ->join('data e', 'balita.id_balita = e.id_balita', 'LEFT')
            ->where('(e.tanggal = (SELECT MAX(tanggal) FROM data WHERE balita.id_balita = e.id_balita))', null, false)
            ->findAll();
    }
}
