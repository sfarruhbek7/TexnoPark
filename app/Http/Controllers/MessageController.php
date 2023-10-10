<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|string|max:255",
            'email'=>"required|email",
            'subject'=>"required|string|max:255",
            'message'=>"required|string"
        ]);
        $data=new Message();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->save();
        return response("OK");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user=auth()->user();
        $data=Message::find($id);
        $data->status=1;
        $data->save();
        $ntf=DB::select("select * from messages where status=0 ORDER BY id DESC");
        return view('Admin.Messages.show',['user'=>$user,'data'=>$data,'ntf'=>$ntf]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Message::destroy($id);
        return redirect()->back();
    }
}
