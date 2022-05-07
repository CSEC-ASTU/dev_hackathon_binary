<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'feed_id','file_name','file_type','file_size','file_path','is_active'
    ];

    protected $guarded = [];

    public function feed()
    {
        return $this->belongsTo(Feed::class, 'feed_id', 'id');
    }

}
