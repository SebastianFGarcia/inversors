<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'money',
        'description',
        'terms',
        'benefits',
        'entrepreneurship_id',
    ];

    public function entrepreneurship(){
        return $this->belongsTo(Entrepreneurship::class);
    }

    public function investor_applications(){
        return $this->hasMany(InvestorApplication::class);
    }
}
