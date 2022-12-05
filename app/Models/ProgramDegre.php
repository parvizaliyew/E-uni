<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramDegre extends Model implements ITranslatable
{
    use HasFactory;
    protected  $fillable=
    [
      'name',
      'logo',
      'images',
      'short_desc',
      'desc',
      'title',
      'type',
      'slug',
      'img'

    ];
    protected $casts = [
        'name'=>'array',
        'desc'=>'array',
        'short_desc'=>'array',
        'title'=>'array',
        'slug'=>'array',

    ];

    public function translate(string $attr)
    {
        return json_decode($this->{$attr})->{app()->getLocale()};
    }

}
