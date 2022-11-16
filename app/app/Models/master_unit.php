<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_unit extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function master_jadwal()
    {
        return $this->hasMany(master_jadwal::class);
    }
}
