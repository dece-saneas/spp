<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTuition extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students_tuitions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'month',
        'amount',
        'student_id',
        'tuition_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'month' => 'date',
        'amount' => 'decimal'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the related student.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the related tuition.
     */
    public function tuition()
    {
        return $this->belongsTo(Tuition::class);
    }
}
