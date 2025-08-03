<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PatientResource extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'file_path',
        'external_link',
        'resource_type',
        'sort_order',
        'is_active',
        'slug',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active resources
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
        return $query->orderBy('sort_order')->orderBy('title');
    }

    /**
     * Scope to filter by resource type
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('resource_type', $type);
    }

    /**
     * Get the resource's file URL
     */
    public function getFileUrlAttribute()
    {
        if ($this->file_path) {
            return asset('storage/' . $this->file_path);
        }
        
        return null;
    }

    /**
     * Check if resource has a file
     */
    public function getHasFileAttribute()
    {
        return !empty($this->file_path);
    }

    /**
     * Check if resource has external link
     */
    public function getHasExternalLinkAttribute()
    {
        return !empty($this->external_link);
    }

    /**
     * Boot method to automatically generate slug
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($resource) {
            if (empty($resource->slug)) {
                $resource->slug = Str::slug($resource->title);
            }
        });
    }
}
