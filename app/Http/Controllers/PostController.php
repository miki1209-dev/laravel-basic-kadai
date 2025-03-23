<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\SUpport\Facades\DB;

class PostController extends Controller
{
	public function index()
	{
		$posts = DB::table('posts')->get();
		return view('posts.index', compact('posts'));
	}
}
