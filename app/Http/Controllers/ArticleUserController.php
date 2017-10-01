<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ArticleUserController extends Controller
{
    

    public function show($id){

    	$articles = User::find($id)->articles; 
    	$user = User::find($id); 

    	return view ('articles.show', compact('articles', 'user'));

    }
}
