<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'excerpt',
        'icon',
        'image',
        'link',
        'user_id'
    ];

    public $translatable = ['title','excerpt'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
