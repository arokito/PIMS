<?php

namespace App\Models;

use App\Models\User;
use App\Models\Community;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zone extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function communities(){
        return $this->hasMany(Community::class);
    }
}
