<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function auth(Request $request)
    {
        $data = ['username' => $request->username, 'password' => $request->password];
        if (Auth::guard('admin')->attempt($data)) {
            return response()->json([
                'status' => 'success',
                // random token number
                'token' => \Str::random(20)
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Incorrect username or password'
        ]);
    }

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Admin $admin)
    {
        //
    }

    public function update(Request $request, Admin $admin)
    {
        //
    }

    public function destroy(Admin $admin)
    {
        //
    }
}
