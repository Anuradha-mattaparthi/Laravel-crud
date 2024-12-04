<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\student;
use Illuminate\Support\Facades\File;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     for ($i = 0; $i <= 10; $i++) { 
    //         student::create([
    //             'stdname' =>fake()->name(),
    //             'stdemail' => fake()->unique()->email()
                    
    //         ]);
    //     }
       
        // $json = File::get('database/json/students.json');
        // $students = collect(json_decode($json));
        // $students->each(function($student){
        //     student::create([
        //         'stdname' =>$student -> stdname,
        //         'stdemail' =>$student -> stdemail,
        //         'stdmarks' =>$student -> stdmarks
        //     ]);
        // });

        $students = collect(
            [
                [
                    "stdname" => "Naveen",
                    "stdemail" => "naveen.businesslabs@gmail.com",
                    "stdmarks" =>"600"  
                ],
                [
                    "stdname" => "upender",
                    "stdemail" => "upender.businesslabs@gmail.com",
                    "stdmarks" =>"500"  
                ],
                [
                    "stdname" => "laxmi",
                    "stdemail" => "laxmi.businesslabs@gmail.com",
                    "stdmarks" =>"490"  
                ]
            ]
        );
        $students->each(function ($sudent){
            student::insert($sudent);
        });

        // student::create([
        //     "stdname" => "sai",
        //      "stdemail" => "sai.businesslabs@gmail.com",
        //      "stdmarks" =>"0"
        // ]);
    }
}
