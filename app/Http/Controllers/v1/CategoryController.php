<?php

namespace App\Http\Controllers\v1;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;

class CategoryController
{
    public function index()
    {
        return Category::get('name');
    }

    public function update(Category $category, Request $request)
    {
        $r['oldCategory'] = Category::find($category->id);
        $category->update($request->all());
        $r['updatedCategory'] = $category;
        $r['state'] = 'category updated with success';
        return $r;
    }

    public function store( Request $request)
    {

        Category::create($request->all());
        $r['category'] = $request->all();
        $r['state'] = 'category created with success';
        return $r;
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return 'category deleted with success';
    }


}
