<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function check($id){
        if (session('code_creator')) {
            return view('share_link', ['id'=>$id]);
        }
        else{
            return 'vayena';
        }
    }
}
