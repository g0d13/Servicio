<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;

    protected $table = 'plantas';
    protected $fillable = ['nombre'];

    public function usuarios()
    {
        return $this->hasMany(User::class);
    }
}
