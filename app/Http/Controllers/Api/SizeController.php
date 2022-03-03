<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        return Size::all();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Size $size)
    {
        //
    }

    public function update(Request $request, Size $size)
    {
        //
    }

    public function destroy(Size $size)
    {
        //
    }
}
