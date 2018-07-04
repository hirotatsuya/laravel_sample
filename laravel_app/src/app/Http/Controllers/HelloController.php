<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class HelloController extends Controller
{
    public function getIndex()
    {
        return view('hello', ['message' => 'Hello by Controller!!!']);
    }
}