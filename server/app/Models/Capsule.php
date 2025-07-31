<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;


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
    // Append full media URL
    protected $appends = ['media_url'];

    public function getMediaUrlAttribute()
    {
        if (! $this->media_path) {
            return null;
        }
        // Storage::url returns '/storage/...'
        return URL::to(Storage::url($this->media_path));
    }
}


