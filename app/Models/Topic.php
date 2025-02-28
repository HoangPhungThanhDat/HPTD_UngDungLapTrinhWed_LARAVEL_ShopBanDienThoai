<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topic';
    use HasFactory;
    protected $fillable = ['title', 'content', 'slug', 'status'];
}
