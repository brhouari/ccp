<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LigneCd extends Model
{
    //
    protected $fillable = [
        'cd_id',
        'nom',
        'prenom',
        'ccp',
        'cle',
        'montant'
        
    ];


    public function cd(): BelongsTo
    {
        return $this->belongsTo(Cd::class);
    }
}
