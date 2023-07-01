<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'descripcion',
        'provincias_id'
    ];

    public function provincia(){
        return $this->belongsTo(Provincia::class, 'provincias_id');
    }
}
