<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fichaPR extends Model
{
    protected $table = 'ficha_p_rs';
    protected $fillable = ['contribuinte', 'cond', 'inscEstadual', 'cpf', 'endereco', 'nINCRA', 'vencContrato', 'nirf', 'telefone', 'pontoReferencia', 'notasEntregue'];
}
