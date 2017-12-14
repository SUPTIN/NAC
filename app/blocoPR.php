<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blocoPR extends Model
{
    protected $table = 'bloco_pr';
    protected $fillable = ['numeracao', 'quantidade', 'date', 'autN', 'idProdutor'];

    public $rules = ['numeracao' => 'required',
                     'quantidade' => 'required',
                     'date' => 'required',
                     'autN' => 'required',];

    public $messages = ['numeracao.required' => 'O campo NUMERAÇÃO é de preenchimento obrigatório!',
                     'quantidade.required' => 'O Campo QUANTIDADE é de preenchimento obrigatório!',
                      'date.required' => 'O Campo DATA é de preenchimento obrigatório!',
                       'autN.required' => 'O Campo AUT. Nº é de preenchimento obrigatório!',];
}
