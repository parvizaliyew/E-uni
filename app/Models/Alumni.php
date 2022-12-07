<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumni extends Model implements ITranslatable
{
    use HasFactory;

    protected  $fillable=
    [
      'position',
      'name',
      'img',
      'ln',
    ];

    protected $casts =
    [
        'name'=>'array',
        'position'=>'array',
    ];

    public function translate(string $attr)
    {
        return json_decode($this->{$attr})->{app()->getLocale()};
    }

}
