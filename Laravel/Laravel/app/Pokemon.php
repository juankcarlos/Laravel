<?php

namespace Pokes;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table="pokemons";

    protected $fillable=['nombre','tipo','naturaleza','nivel','sexo'];
}
