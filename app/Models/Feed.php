<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','event_id','feed_type_id','title','description','issue_date','is_active'
    ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }

    public function feedType()
    {
        return $this->belongsTo(FeedType::class, 'feed_type_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(FeedComment::class, 'feed_id', 'id');
    }

}
