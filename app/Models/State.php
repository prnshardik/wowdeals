<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model{
    use HasFactory;

    protected $table = 'states';

    protected $fillable = ['name', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'];
}
