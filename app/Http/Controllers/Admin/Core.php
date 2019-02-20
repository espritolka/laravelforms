<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller
{

    public function __construct() 
    {
        $this->middleware('mymiddle');
    }
    //list materials
    public function getArticles() {

    
    }
    //list material
    public function getArticle($id) {
        echo 'Ответ -'.$id;
    
    }

}
