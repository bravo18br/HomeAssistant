<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Periodicidade;
use App\Models\Situation;

class Conta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'valor_original',
        'data_original',
        'valor_pgmt',
        'data_pgmt',
        'descricao',
        'pdf',
        'categoria_id',
        'periodicidade_id',
        'situation_id'
    ];

public function categoria(){
    return $this->belongsTo(Categoria::class);
}

public function periodicidade(){
    return $this->belongsTo(Periodicidade::class);
}

public function situation(){
    return $this->belongsTo(Situation::class);
}

}