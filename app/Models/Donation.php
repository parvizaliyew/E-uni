<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model implements ITranslatable
{
    use HasFactory;

    protected  $fillable=
    [
      'name',
      'date',
      'donation_name',
      'img',
    ];

    protected $casts = [
        'name'=>'array',
        'donation_name'=>'array',
    ];

public function translate(string $attr)
{
    return json_decode($this->{$attr})->{app()->getLocale()};
}
}
