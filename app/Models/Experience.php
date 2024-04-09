<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Experience extends Model
{
    use HasFactory, HasTranslations, SoftDeletes;

    public $translatable =
        ['organization_name',
            'position',
            'duties'];

    protected $fillable = [
        'organization_name',
        'organization_link',
        'start_date',
        'end_date',
        'position',
        'duties',
        'user_id'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    protected $dates = ['start_date',
        'end_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
