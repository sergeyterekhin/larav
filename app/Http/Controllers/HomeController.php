<?php
namespace App\Http\Controllers;

Class HomeController extends Controller
{
    public function index()
    {
        //env() получает настройки из группы настроек окружения
        //config() настройки самого приложения
        //cчитывает настройки среды
        dump($_ENV['MY_SETTING']);
        dump(env('MY_SETTING2','not found'));
        dump(config('app.timezone'));
        dump(config('database.connections.mysql.database'));
        return view('home',['res'=>5,'name'=>'John']);
    }
    public function test(){
        return __METHOD__;
    }
}
