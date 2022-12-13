<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationMessage extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'company_name',
        'name',
        'email',
        'msj'
    ];
}
