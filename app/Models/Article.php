<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import the User model

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'cover',
    ];

    /**
     * Get the user who owns the article.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
