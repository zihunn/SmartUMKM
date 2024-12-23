<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'business_type',
        'address',
        'phone',
        'email',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
