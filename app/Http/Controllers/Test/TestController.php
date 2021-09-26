<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
   public function index(){
       //$data = DB::table('country')->get(); вывести всю таблицу country
    //    $data = DB::table('country')->limit(5)->get(); вывести всю таблицу до id 5
    //$data = DB::table('country')->select('Code','Name')->get(); вывести всю таблицу и показать только code и name
   // $data = DB::table('country')->select('Code','Name')->first(); // выводит первый элемент из таблицы country
//    $data = DB::table('country')->select('Code','Name')->orderBy('Code','desc')->first(); // выводит последний элемент из таблицы
// $data = DB::table('city')->select('ID','Name')->find(2); //выводит 2 элемент в таблице
//$data = DB::table('city')->select('ID','Name')->where('id','>=',4)->get(); // выводит 2 элемент в таблице
//$data = DB::table('city')->select('ID','Name')->where([['id','>',1],['id','<',5]])->get();
//$data=DB::table('city')->where('id','<',5)->value('Name');
//$data=DB::table('country')->limit(10)->pluck('Name','Code');
$data=DB::table('country')->count();
//$data=DB::table('country')->max('population');
//$data=DB::table('country')->sum('population');
//$data=DB::table('country')->avg('population');
//$data=DB::table('city')->select('CountryCode')->distinct()->get();

// $data=DB::table('city')->select('city.ID','city.Name as city_name','country.Code','country.Name as country_name')
// ->limit(10)->join('country','city.CountryCode','=','country.Code')->orderBy('city.ID')->get();
dd($data);
   }
}
