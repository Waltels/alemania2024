<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        $files =File::where('user_id', Auth::id())->latest()->get();
        return view ('files.file', compact('files'));
    }
}
