<?php

//This file is for handling the communications sent to / from the database through a website interface
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Ambassador extends Controller
{
  
   public function test()
   {
      return DB::select('select * from User')
      
   }
  
  
}
