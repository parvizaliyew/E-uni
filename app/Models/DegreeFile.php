<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeFile extends Model
{
    use HasFactory;

    protected  $fillable=
    [
      'type',
      'file',
      'name'
    ];

    protected $casts = [
      'name'=>'array',
  ];

public function translate(string $attr)
{
  return json_decode($this->{$attr})->{app()->getLocale()};
}
}
