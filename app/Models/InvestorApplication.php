<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'investment_id'
    ];

    public function investment(){
        return $this->belongsTo(Investment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
