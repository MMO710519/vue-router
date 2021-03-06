<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//User一覧表示
Route::get('/user',function (Request $request) {

	$users = App\User::all();

	return response()->json(['users' => $users]);

});
//ユーザー詳細表示
Route::get('/user/{user}', function (App\User $user) {
    return response()->json(['user'=>$user]);
});
//ユーザー更新
Route::patch('/user/{user}', function(App\User $user,Request $request){

	$user->update($request->user);

	return response()->json(['user' => $user]);

});
//ユーザー削除
Route::delete('/user/{user}',function(App\User $user){
	$user->delete();
	return response()->json(['message'=>'delete successfully']);
});
//ユーザー作成
Route::post('/user', function(Request $request){

	$user = App\User::create($request->user);

	return response()->json(['user' => $user]);

});
