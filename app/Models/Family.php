<?php

namespace App\Models;

use App\Models\Community;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Family extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =['name','community_id'];

    
    public function community(){
        return $this->belongsTo(Community::class);
    }

}
