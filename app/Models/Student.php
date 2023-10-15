<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

