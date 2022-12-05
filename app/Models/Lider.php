<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lider extends Model implements ITranslatable
{
    use HasFactory;

    protected  $fillable=
    [
      'position',
      'name',
      'book_name',
      'desc',
      'img',
      'short_desc',
    ];

    protected $casts = [
        'name'=>'array',
        'position'=>'array',
        'book_name'=>'array',
        'desc'=>'array',
        'short_desc'=>'array',
    ];

    public function translate(string $attr)
{
    return json_decode($this->{$attr})->{app()->getLocale()};
}
    
}
