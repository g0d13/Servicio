<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'detalles'];

    public function mecanico()
    {
        return $this->hasOne(User::class, 'id', 'mecanico_id');
    }
}
