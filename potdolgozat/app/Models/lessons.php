<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    use HasFactory;

    protected $primaryKey = 'lesson_id';

    protected $fillable = [
        'status',
        'subject_id',
        'user_id'
    ];

    public function user() {
        return $this->hasMany(User::class);
    }

    
    public function subjects() {
        return $this->belongsTo(subjects::class);
    }
}
