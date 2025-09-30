<?php

namespace App\Http\Controllers\v1;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        if (auth()->user()->can('viewAny-category', Category::class)){
            return Category::get('name');
        }else {
            return response('Unauthorized.', 401);
        }
    }

    public function update(Category $category, Request $request)
    {

        if (auth()->user()->can('update-category', Category::class)){
            $r['oldCategory'] = Category::find($category->id);
            $category->update($request->all());
            $r['updatedCategory'] = $category;
            $r['state'] = 'category updated with success';
            return $r;
        }else {
            return response('Unauthorized.', 401);
        }

    }

    public function store( Request $request)
    {

        if (auth()->user()->can('create-category', Category::class)){
            Category::create($request->all());
            $r['category'] = $request->all();
            $r['state'] = 'category created with success';
            return $r;
        }else {
            return response('Unauthorized.', 401);
        }

    }

    public function destroy(Category $category)
    {

        if (auth()->user()->can('delete-category', Category::class)){
            $category->delete();
            return 'category deleted with success';
        }else {
            return response('Unauthorized.', 401);
        }
    }


}
