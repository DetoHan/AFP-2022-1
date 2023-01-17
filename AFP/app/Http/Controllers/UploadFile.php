<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFile extends Controller
{
    function UploadFile(Request $req){
        return $req->file('file')->store('docs');
    }
}