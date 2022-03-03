<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category as ResourcesCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'cateName' => 'unique:categories,name'
            ],
            [
                'cateName.unique' => 'Category name is already exists'
            ]
        );

        try {
            $category = ResourcesCategory::getCategory($request);
            Category::create($category);
            return response()->json([
                'message' => 'Create category success'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Create category failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function show(Category $category)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'cateName' => 'unique:categories,name'
            ],
            [
                'cateName.unique' => 'Category name is already exists'
            ]
        );

        try {
            $category = Category::find($id);
            if (!is_null($category)) {
                $data = ResourcesCategory::getCategory($request);
                if ($category->update($data))
                    return response()->json([
                        'message' => 'Update category success'
                    ], 200);
                else
                    return response()->json([
                        'message' => 'Update category failed'
                    ], 400);
            }

            return response()->json([
                'message' => 'Category not found'
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Update category failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $category = Category::find($id);
            if (!is_null($category))
                if ($category->delete())
                    return response()->json([
                        'message' => 'Delete category success'
                    ], 200);
                else
                    return response()->json([
                        'message' => 'Delete category failed'
                    ], 400);

            return response()->json([
                'message' => 'Category not found'
            ], 400);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Delete category failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
