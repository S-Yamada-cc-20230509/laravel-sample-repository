<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'last_name_kanji',
        'first_name_kanji',
        'last_name_hiragana',
        'first_name_hiragana',
        'tel',
        'company_name',
        'email',
        'content',
        'internet_search',
        'search_word',
        'acquaintance_introduction',
        'introducer_name',
        'sns',
        'flyer',
        'others',
        'free_input',
    ];
}
