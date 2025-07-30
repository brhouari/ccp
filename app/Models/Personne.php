<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Personne extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'ccp',
        'cle'
    ];

   /** public function cds(): HasMany

    {

        return $this->belongsTo(Cd::class,'cd_id');

    }*/
}