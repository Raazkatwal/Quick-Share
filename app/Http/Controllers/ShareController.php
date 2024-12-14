<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function share(Request $r){
        $r->validate([
            'title' => 'required|string',
            'text' => 'required|string',
        ]);
        $rand = Str::lower(Str::random(5));
        Code::create([
            'title' => $r->title,
            'text' => $r->text,
            'code' => $rand,
        ]);
        session(['code' => $rand]);
        if(session('code') == $rand){
            session(['code_creator' => true]);
        }
        return redirect()->route('share_link', ['id'=>$rand]);
    }
    public function fetch_code(string $id){
        $data = Code::where('code', $id)->first();
        return view('copy_text', compact('data'));
    }
    public function check(string $id){
        if(session('code') != $id){
            session()->forget('code_creator');
        }
        return view('share_link', ['id' => $id]);
    }
    public function search(Request $r){
        $r->validate([
            'id' => 'required'
        ]);
        return redirect()->route('share_link', ['id'=>$r->id]);
    }
}
