<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Maman', 'gender' => 'L', 'nis' => '0101001', 'class_id' => 2],
            ['name' => 'Mumun', 'gender' => 'P', 'nis' => '0101002', 'class_id' => 2],
            ['name' => 'Mimin', 'gender' => 'P', 'nis' => '0101003', 'class_id' => 1],
            ['name' => 'Momon', 'gender' => 'L', 'nis' => '0101004', 'class_id' => 3],
        ];

        foreach ($data as $value){
            Student::insert([
                'name' => $value['name'], //kiri dari field table kanan dari array diatas (variable $data)
                'gender' => $value['gender'],
                'nis' => $value['nis'],
                'class_id' => $value['class_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]); 
        }
    }
}
