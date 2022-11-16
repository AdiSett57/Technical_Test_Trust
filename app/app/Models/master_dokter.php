<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_dokter extends Model
{
    use HasFactory;
    protected $fillable = ['pegawai_nomor', 'pegawai_nama', 'pegawai_jenis_kelamin', 'pegawai_sip'];
    public $timestamps = false;


    public function master_jadwal(){
        return $this->hasOne(master_jadwal::class);
    }


}
