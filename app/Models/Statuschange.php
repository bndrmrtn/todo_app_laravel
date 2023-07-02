<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuschange extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $fillable = ['status_id', 'todo_id'];

}
