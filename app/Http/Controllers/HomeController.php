<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

Class HomeController extends Controller
{
    public function index()
    {
  //DB::insert("INSERT INTO posts(title,content) VALUES (?,?)",['Статья 5','LOREM IPSYUN 5']);
 //  DB::update("UPDATE posts SET created_at = ?, updated_at=? WHERE created_at IS NULL OR updated_at IS NULL",[NOW(),NOW()]);
//   DB::delete("DELETE FROM posts WHERE id=?",[4]);
DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL",[NOW()]);
DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL",[NOW()]);
   $posts=DB::select("SELECT * FROM posts WHERE id> :id",['id'=>1]);
        return $posts;
        //env() получает настройки из группы настроек окружения
        //config() настройки самого приложения
        //cчитывает настройки среды

        dump($_ENV['MY_SETTING']);
        dump(env('MY_SETTING2','not found'));
        dump(config('app.timezone'));
        dump(config('database.connections.mysql.database'));
        //return view('home',['res'=>5,'name'=>'John']);
    }
    public function test(){
        return __METHOD__;
    }
}
