<?php

namespace App\Http\Controllers\Files;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Documento;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        $documentos = Documento::all();

        $files =File::where('user_id', Auth::id())->latest()->get();
        return view ('files.file', compact('files','documentos'));

    }
}
