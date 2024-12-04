<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  //query builder namespace 

class StudentController extends Controller
{
    public function showUsers()
    {
         $users = DB::table('students')->select('id','stdmarks')->get();
          //using view
        //return view('allusers',["data" => $users]);
    return $users;
        //$users = DB::table('students')->find(2);

        //return $users;
        // dd($users);
        // dump($users);
        // foreach($users as $user){
        //     echo $user->stdname . "<br>";
        // }
    }
     public function singleUser(string $id){
        $users = DB::table('students')->where('id', $id)->get();
        return view('user',['data' => $users]);
     }
     public function deleteUser(string $id){
      $users = DB::table('students')->where('id', $id)->delete();
   }
     public function addUser(){
      $user = DB::table('students')->insert([
        [
        'stdname' =>'Angel',
        'stdmarks' =>'500',
        'stdemail' =>'anuradha@gmail.com'
        
        ],
        [
          'stdname' =>'Kanha',
          'stdmarks' =>'700',
          'stdemail' =>'Kanha@gmail.com'
         
          ]
      ]);
      if($user){
        echo "<h1> DAta added sauccessfully</h1>";
      }
     }
    
}