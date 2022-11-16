<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_jadwal extends Model
{

    protected $guarded = ['id'];
    use HasFactory;



    public function master_unit(){
        return $this->belongsTo(master_unit::class);
    }

    public function master_dokter()
    {
        return $this->belongsTo(master_dokter::class);
    }

}




