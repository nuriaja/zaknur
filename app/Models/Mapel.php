<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = "mapels";
    protected $guarded = ['id'];

    public function mapel(){
        return $this->belongsTo(NamaMapel::class, 'nama_mapel_id', 'id');
    }
}
