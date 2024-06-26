<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::orderBy('id')->paginate(10);
        return view('vaccine.index', ['vaccines' => $vaccines]);
    }
}
