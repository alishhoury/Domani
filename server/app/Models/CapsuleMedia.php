<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CapsuleMedia extends Model
{
    public $timestamps = false;
    use HasFactory;
    
    public function capsule()
    {
        return $this->belongsTo(Capsule::class, 'capsule_id');
    }    
}
