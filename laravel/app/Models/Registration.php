<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;


    protected $fillable = [
        'voorletters', 'voornaam', 'geslacht', 'adres', 'postcode', 'gemeente', 'regio', 'verwijzer', 'partner', 'kind', 'linnen', 'speelgoed', 'volwassen'
    ];

   /* public function path()
    {
        return route('registration.show', $this);
    }*/
}
