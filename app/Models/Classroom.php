<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'competency_id'
    ];

    /**
     * Get the classroom competency.
     */
    public function competency()
    {
        return $this->belongsTo(Competency::class);
    }

    /**
     * Get the tuition fees for the classroom.
     */
    public function tuitions()
    {
        return $this->hasMany(Tuition::class);
    }
}
