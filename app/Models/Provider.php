<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'bio',
        'photo',
        'specialty',
        'accepts_telehealth',
        'accepts_new_patients',
        'email',
        'phone',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'accepts_telehealth' => 'boolean',
        'accepts_new_patients' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active providers
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to order by sort_order
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    /**
     * Get the provider's full name with credentials
     */
    public function getFullNameAttribute()
    {
        return $this->name;
    }

    /**
     * Get the provider's display title
     */
    public function getDisplayTitleAttribute()
    {
        return $this->title;
    }

    /**
     * Get the provider's photo URL
     */
    public function getPhotoUrlAttribute()
    {
        if ($this->photo) {
            return asset('storage/' . $this->photo);
        }
        
        // Return a placeholder image
        return asset('images/placeholder-provider.jpg');
    }
}
