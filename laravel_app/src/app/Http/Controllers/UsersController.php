<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class UsersController extends Controller
{
    public function getIndex(Request $request)
    {
        return view('user', ['message' => '値を入力してください']);
    }
    public function insert(Request $request)
    {
        DB::insert('insert into users (name, email, password) values (?, ?, ?)',[
            1, $request->input('name'),
            2, $request->input('email'),
            3, $request->input('password')
        ]);
        return view('user', ['message' => 'ユーザを追加しました']);
    }
    public function selectUsers(Request $request)
    {
        // $target = $request->input('id');
        // $user = DB::select('select * from users where id = :id', ['id' => $target]);
        $users = DB::select('select * from users');
        // return view('show_users', ['user' => $user, 'users' => $users]);
        return view('show_users', ['users' => $users]);
    }
}