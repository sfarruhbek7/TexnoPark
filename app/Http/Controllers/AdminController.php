<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function message(){
        $user=auth()->user();
        $data=Message::all()->sortKeysDesc();
        $ntf=DB::select("select * from messages where status=0 ORDER BY id DESC");
        return view('Admin.Messages.index',['user'=>$user,'data'=>$data,'ntf'=>$ntf]);
    }
}
