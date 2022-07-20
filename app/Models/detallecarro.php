<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detallecarro extends Model
{
    use HasFactory;
    protected $guarded = ['status'];

    protected $table = 'detallecarro';
    protected $primaryKey ='id';
    public function carros()
    {
        return $this->hasOne('App\Models\carros', 'id', 'carro_id');
    }
}
