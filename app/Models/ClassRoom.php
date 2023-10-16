<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;
    protected $table = 'class'; //ini diperlukan karena nama model bukan bentuk singular dari tabel

    /**
     * Get all of the students for the ClassRoom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id', 'id');//jenis relasi one to many pakainya has may bukan belongsTo
    }

    
    public function homeroomTeacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
