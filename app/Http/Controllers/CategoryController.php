<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        Category::create([
            'category' => $request->category,
        ]);
        return redirect('/admin/'); 
    }

    public function delateCategory(Category $category)
    {

        $category = Category::find($category->id);
        $category->serchCategoryToProduct()->delete();
        $category->delete();

        return redirect('/admin/');

    } 
}
