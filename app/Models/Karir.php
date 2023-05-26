<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    use HasFactory;
    protected $table = 'karirs';

    protected $fillable = ['job_title', 'description' , 'requirements' , 'responsibilities' , 'job_image'];
}
