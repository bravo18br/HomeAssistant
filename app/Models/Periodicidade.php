<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Conta;

class Periodicidade extends Model
{
    use HasFactory;

    protected $fillable=[
        'nome'
    ];
    public function conta(){
        return $this->hasMany(Conta::class);
    }
}
