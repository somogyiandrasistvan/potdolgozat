<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    use HasFactory;

    protected $primaryKey = 'subject_id';

    protected $fillable = [
        'name',
        'description',
        'limit'
    ];

    public function subjects() {
        return $this->hasMany(subjects::class);
    }
}
