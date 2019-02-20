<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show() {
        //return view('welcome');
        
        //////// 1 способ:
        // $data = array('title'=>'Hello World');
        // return view('test.template',$data); // key=>value

       ////////// 2 способ:
        return view('test.index')->with('title','Hello World');


        ////////// 3 способ:
    //    $view = view('test.template');       
    //    $view->with('title','Hello World 3');
    //    return $view;

       ////////// 4 способ:
       //if (view()->exists('test.template.blade')) {

       //$path = config('view.paths');
      // return view()->file($path[0].'/test/template.blade.php')->withTitle('Hello World 4');
       //echo view()->file($path[0].'/test/template.php')->withTitle('Hello World 4')->getPath();
       //return view('test.template')->withTitle('Hello World 4');       
    }
       //abort(404);
    
    public function show_about() {

        $array = array(
            'data' =>[
                    'one' => 'List 1',
                    'two' => 'List 2',
                    'three' => 'List 3',
                    'four' => 'List 4',
                    'five' => 'List 5'
            ]
            );
        return view('test.about',$array)->with('title','Hello');
    }
}
