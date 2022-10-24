<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = [
        'title',
        'excerpt',
        'icon',
        'image',
        'link',
        'technologies',
        'user_id'
    ];

    protected $casts = [
        'technologies' => "array"
    ];

    public $translatable = ['title','excerpt'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
