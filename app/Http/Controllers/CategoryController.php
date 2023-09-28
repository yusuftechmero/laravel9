<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request) {
        $lan = $request->lan;

        // 'sort_desc'
        // 'questions'
        // 'prompt'
        // $data = Category::whereJsonContains('category_name', $lan)->get();
        $data = Category::select(
                    "category_name->{$lan} as name",
                    "sort_desc->{$lan} as sort_description",
                    "questions->{$lan} as question",
                    "prompt->{$lan} as promptData"
                )->paginate();
                
        return CategoryResource::collection($data);
        // return response()->json(['data' => $data]);
    }
}
