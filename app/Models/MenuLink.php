<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MenuLink extends Model
{
    use HasFactory, hasTranslations;

    protected $fillable = [
        'name',
        'link',
        'location',
        'user_id'
    ];

    public $translatable = ['name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
