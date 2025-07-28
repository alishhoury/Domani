<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Capsule extends Model
{
    use HasFactory;

        public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }


     protected $fillable = [
        'user_id',
        'private_mode',
        'surprize_mode',
        'ip_address',
        'countryName',
        'mood',
        'message',
        'media_type',
        'media_path',
        'reveal_at',
        'is_revealed'
    ];

    protected $casts = [
        'private_mode' => 'boolean',
        'surprize_mode' => 'boolean',
        'is_revealed' => 'boolean',
        'reveal_at' => 'date'
    ];
}


