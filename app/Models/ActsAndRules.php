<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActsAndRules extends Model
{
    use HasFactory;

    protected $fillable = ['acts','rules','directive'];
}
