<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UsersController extends Controller
{
    public function cantUsuarios(){
    	$cantUsuarios = DB::table('users')->count();
    	return $cantUsuarios;
    };
}
