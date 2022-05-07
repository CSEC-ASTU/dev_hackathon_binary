<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteChoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'vote_id','user_id','title','description','image_url','is_active'
    ];

    protected $guarded = [];

    public function vote()
    {
        return $this->belongsTo(Vote::class, 'vote_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
