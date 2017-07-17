<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    //
    protected $table = 'atendimentos';

    protected $fillable = [
        'solicitante', 'contrato', 'relato', 'observacoes', 'os', 'nota', 'status', 'data', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
