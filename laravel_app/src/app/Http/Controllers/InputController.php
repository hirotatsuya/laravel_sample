<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class InputController extends Controller
{
    public function getIndex(Request $request)
    {
        return view('input', ['message' => 'please type...']);
    }
    public function postIndex(Request $request)
    {
        $res = "you typed: " . $request->input('str');
        return view('input', ['message' => $res]);
    }
    public function getQuery(Request $request)
    {
        $res = 'ID : ' . $request->id;
        return view('input', ['message' => $res]);
    }
    public function gotoHello(Request $request)
    {
        return redirect()->action('HelloController@getIndex');
    }
}