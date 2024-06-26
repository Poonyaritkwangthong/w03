<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $facultys = Faculty::orderBy('id')->paginate(10);
        return view('faculty.index', ['facultys' => $facultys]);
    }
}
