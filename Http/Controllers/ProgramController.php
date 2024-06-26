<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::orderBy('id')->paginate(10);
        return view('program.index', ['programs' => $programs]);
    }
}
