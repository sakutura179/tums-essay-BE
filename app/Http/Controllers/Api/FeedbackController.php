<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return Feedback::all();
    }

    public function store(Request $request)
    {
        try {
            return Feedback::create($request->all());
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Create feedback failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
