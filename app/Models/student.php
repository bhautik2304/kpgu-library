<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        "avatar",
        "name",
        "number",
        "email",
        "password",
        "gender",
        "approvel",
        "address",
        "academic",
        "program",
        "semester",
    ];
}
