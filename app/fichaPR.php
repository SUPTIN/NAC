<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fichaPR extends Model
{
    protected $table = 'ficha_p_rs';
    protected $fillable = ['contribuinte',  'ativo', 'cond', 'inscEstadual', 'cpf', 'endereco', 'nINCRA', 'vencContrato', 'nirf', 'telefone', 'pontoReferencia', 'notasEntregue'];

    public $rules = ['contribuinte' => 'required|min:3|max:191',
                     'inscEstadual' => 'required',];

    public $messages = ['contribuinte.required' => 'O campo CONTRIBUINTE é de preenchimento obrigatório!',
                     'inscEstadual.required' => 'O Campo INSC. ESTADUAL é de preenchimento obrigatório!'];
}
