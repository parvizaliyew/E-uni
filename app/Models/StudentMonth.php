<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentMonth extends Model implements ITranslatable
{
    use HasFactory;

    protected  $fillable=
    [
      'specialty',
      'name',
      'desc',
      'short_desc',
      'img'
    ];

    
    protected $casts = [
        'specialty'=>'array',
        'name'=>'array',
        'desc'=>'array',
        'short_desc'=>'array',
    ];

    public function translate(string $attr)
    {
        return json_decode($this->{$attr})->{app()->getLocale()};
    }
    
}
