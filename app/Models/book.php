<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'book_img_small',
        'book_img_banner',
        'desc',
        'books_number',
        'bookcategories_id',
        'authers_id',
        'fines_id',
        'status',
        'qty',
    ];
}
