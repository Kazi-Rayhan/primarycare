<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
        'provider_id',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'provider_id' => 'integer',
    ];

    /**
     * Get the provider associated with this submission
     */
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    /**
     * Get the full name of the contact
     */
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Scope to get pending submissions
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope to get contacted submissions
     */
    public function scopeContacted($query)
    {
        return $query->where('status', 'contacted');
    }

    /**
     * Scope to get resolved submissions
     */
    public function scopeResolved($query)
    {
        return $query->where('status', 'resolved');
    }
}
