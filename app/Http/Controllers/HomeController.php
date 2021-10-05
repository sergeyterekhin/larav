<?php
namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

Class HomeController extends Controller
{
    public function index()
    {
//===========================заполнение бд=====================================================
 //   $post = new Post();
//    $post->title='Статья 3';
//    $post->content='Lorem ipsum 2';
//     $post->save();
//-------------------------------------------------------------------------------------------

//===========================заполнение бд=====================================================
// $post = new Post();
//$post->fill(['title'=>'Post 6','content'=>'Lorem ipsum 6']);
//$post->save();
//---------------------------------------------------------------------------------

//===========================заполнение бд=====================================================
// $post=Post::find(7); //нашёл пост с id 7
// $post->title='WARNING'; //title для него сделал warning
// $post->content='WARNING';//content для него сделал warning
// $post->save(); // сохранил
//---------------------------------------------------------------------------

//===========================запрос на получение данных из бд=================================================
//$data = Country::all(); //выводит все записи из таблицы модели
//$data = Country::limit(5)->get(); //вывести 5 записей
//$data=Country::query()->limit(5)->get();
//$data =Country::where('Code','=','ALB')->get();
// $data=City::find('5');

//===================================one-to-many====================================================
// $post= Rubric::find(4)->post()->select('title')
//->where('id','>',3)->get(); выбрал ид в рубрике 5 и в таблице posts нашёл пост из этой рубрике и айди которого больше 5 и вывел только контент
//
// $posts=Post::where('id','>',1)->get();// cлишком много запросов создает
// $posts=Post::with('rubric')->where('id','>',1)->get();// идеальная один запрос
//
// foreach ($posts as $post) {
//     dump($post->title,
//     $post->rubric->title);
// }
//=============================================

//==========================many-to-many===================================================
// migrations
// create_post_tag_table
// create_tags_table

// model
// tag
// Post
$post=Tag::find(4); // search on posts in tag
foreach ($post->posts as $tag)
{
    dump($tag->title);
}

$post=Post::find(2); // search on tags in post
foreach ($post->tags as $tag)
{
    dump($tag->title);
}
//==============================================================================
return view('home',['res'=>5,'name'=>'John']);
}
    public function test()
    {
        return __METHOD__;
    }
}
