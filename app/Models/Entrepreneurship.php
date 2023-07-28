<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepreneurship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'objective',
        'projection',
        'team',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function investments(){
        return $this->hasMany(Investment::class);
    }
}
