<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'skills',
        'description',
        'specific_technologies',
        'users_id',
        'dead_line',
    ];
    public function Users(){
        return $this->hasMany(User::class);
    }

    protected $casts = [
        'specific_technologies' => 'array'
    ];
}