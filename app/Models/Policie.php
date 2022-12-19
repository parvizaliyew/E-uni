<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policie extends Model
{
    use HasFactory;
    protected  $fillable=
    [
      'name',
      'date',
      'type',
      'file',
    ];

    protected $casts = [
        'name'=>'array',
    ];

public function translate(string $attr)
{
    return json_decode($this->{$attr})->{app()->getLocale()};
}
}
