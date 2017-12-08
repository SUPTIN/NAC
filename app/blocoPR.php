<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blocoPR extends Model
{
    protected $table = 'bloco_pr';
    protected $fillable = ['numeracao', 'quantidade', 'date', 'autN', 'idProdutor'];
}
