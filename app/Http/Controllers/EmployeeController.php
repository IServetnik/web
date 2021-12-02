<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees');
    }

    public function getAll(Request $request)
    {
        $data = Http::get('http://lab.vntu.org/webusers/api-server/lab7.php')->json();

        $sortBy = $request->sortBy;
        if ($sortBy) {
            $data = collect($data)->sortBy($sortBy)->values()->toArray();
        }

        return response()->json($data);
    }
}
