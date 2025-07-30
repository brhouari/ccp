<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cd extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

   /** public function personnes(): HasMany

    {

        return $this->hasMany(Personne::class,'cd_id');

    }*/
}