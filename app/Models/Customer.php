<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'details',
        'fk_address'
    ];

    public function address()
    {
        return $this->hasOne(Endereco::class, 'fk_address');
    }
}