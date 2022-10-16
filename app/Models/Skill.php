<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Skill extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = [
        'title',
        'percentage',
        'user_id'
    ];

    public $translatable = ['title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
