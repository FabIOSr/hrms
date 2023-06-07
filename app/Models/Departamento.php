<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table='departamento';

    protected $guarded = [];

    public function getCustoAttribute()
    {
        if($this->centro_custo == null){
            return '---';
        }
        return $this->centro_custo;
    }
}
