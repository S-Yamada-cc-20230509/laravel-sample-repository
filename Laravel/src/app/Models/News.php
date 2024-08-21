<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $factory = 'NewsFactory';
    protected $table = 'news';

    protected $fillable = [
        'date',
        'title',
        'explanation',
        'image_path'
    ];

    protected $casts = [
        'date' => 'date:YYYY/MM/DD(ddd)'
    ];
}
