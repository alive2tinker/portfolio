<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Translatable\HasTranslations;

class User extends Authenticatable implements FilamentUser, HasAvatar
{
    use HasApiTokens, HasFactory, Notifiable, HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'meta',
        'about_header',
        'about_content',
        'meta',
        'word_cv',
        'pdf_cv',
        'files'
    ];

    public $translatable = [
        'meta->main_description',
        'about_header',
        'about_content'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'meta' => 'array',
        'about_header' => "array",
        'about_content' => "array",
        'files' => 'array'
    ];

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->avatar_url;
    }

    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return $this->id === 1;
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function tools()
    {
        return $this->hasMany(Tool::class);
    }

    public function hardware()
    {
        return $this->tools->where('type','hardware');
    }

    public function software()
    {
        return $this->tools->where('type','software');
    }
}
