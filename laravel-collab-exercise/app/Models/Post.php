<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Get the user t the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     */
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
