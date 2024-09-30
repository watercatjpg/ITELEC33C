<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreOrder extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'full_name', 'email', 'quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}