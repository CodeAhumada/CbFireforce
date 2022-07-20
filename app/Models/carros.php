<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carros extends Model
{
    use HasFactory;
    protected $guarded = ['status'];


    public function detallecarro()
    {
        return $this->hasMany('App\Models\detallecarro', 'carro_id', 'id');
    }
}
