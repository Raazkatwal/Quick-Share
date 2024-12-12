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
        return redirect()->route('copy_link', ['id'=>$rand]);
    }
}
