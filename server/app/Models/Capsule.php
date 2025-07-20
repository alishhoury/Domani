<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use App\Models\CapsuleLocation;
// use App\Models\CapsuleMedia;
// use App\Models\CapsuleTag;
// use App\Models\User;

class Capsule extends Model
{
    use HasFactory;

//relations to other models
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function media()
    {
        return $this->hasOne(CapsuleMedia::class, 'capsule_id');
    }

    public function tag()
    {
        return $this->hasOne(CapsuleTag::class, 'capsule_id');
    }

    public function location()
    {
        return $this->hasOne(CapsuleLocation::class, 'capsule_id');
    }

}
