<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'division_id', 'sub_division_id', 'title', 'description', 'image_url', 'issue_date', 'start_date', 'end_date', 'is_active', 'is_public'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function divisions()
    {
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }

    public function subDivisions()
    {
        return $this->belongsTo(SubDivision::class, 'sub_division_id', 'id');
    }

    public function comment(){
        return $this->hasMany(EventComment::class, 'event_id', 'id');
    }

    public function like(){
        return $this->hasMany(EventReact::class, 'event_id', 'id');
    }

}
