<?php

namespace App\Models;

use App\Models\Extracurriculer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    // protected $table = 'students';//sebetulnya ini tidak diperlukan, krn nama model sudah bemtuk singular dari nama tabel di databasenya
    // protected $primaryKey = 'id'; //inipun sebetulnya tidak perlu karna nama id sudah id saja kecual namanya bukan id misal id_student
    // public $incrementing = false ; //ini untuk setup bahwa table yang digunakan tidak auto_increment
    // protected $keyType = 'string'; //jika id yg digunakan bukan integer 
    // public $timestamps = false; //ini diperlukan jika di table tidak ada created_at dan updated_at

    protected $fillable = [
        'name', 'gender', 'nis', 'class_id'
    ];

    public function class(){
        // return $this->belongsTo(ClassRoom::class, 'selainNamaTableReferensi_id', 'id'); //ini jika nama foreign key bukan merupakan nama dari tabel referensi (ex : class_id)
        return $this->belongsTo(ClassRoom::class); //jenis relation many to one
    }

    
    public function extracurriculers()
    {
        return $this->belongsToMany(Extracurriculer::class, 'student_extracurriculer', 'student_id', 'extracurriculer_id');
    }
}

