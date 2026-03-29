<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
        return view('folder.index');
    }
}
