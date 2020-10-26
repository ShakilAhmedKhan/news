<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\Employee;
use app\User_order;

class DBController extends Controller
{
    public function index(){
        //$all = DB::table('employee')->select('name','age','city')->get();
        //echo $all;
        //$all = DB::table('employee')->pluck('email','city');
        //$single = DB::table('employee')->first();
        //$orderby = DB::table('employee')->orderby('id','DESC')->get();
        //$limit = DB::table('employee')->orderBy('id','DESC')->limit(2)->get();
        //$count = DB::table('employee')->count();
        $offset = DB::table('employee')->orderBy('salary')->offset(1)->limit(1)->get();
        dd($offset);
    }

    public function joining(){
        $result = DB::table('user_order')
                ->join('user','user.user_id','=','user_order.user_id')
                ->select('user.name','user_order.ammount','user_order.order_date')
                ->get();

                dd($result);
    }

    public function user_order(){
        $result = User_order::all();
        dd($result);
    }


}
