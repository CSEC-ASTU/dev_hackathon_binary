<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVoteChoice extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'vote_choice_id', 'voting_id', 'is_active'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function vote_choice()
    {
        return $this->belongsTo(VoteChoice::class, 'vote_choice_id', 'id');
    }

    public function voting()
    {
        return $this->belongsTo(Voting::class, 'voting_id', 'id');
    }

}
