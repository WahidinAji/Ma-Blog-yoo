<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaryNote extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'context', 'accent', 'english', 'indonesia'];
    public $timestamps = true;
}
