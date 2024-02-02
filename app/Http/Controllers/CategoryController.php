<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function table_category()
    {
        $category = Category::all();
        return view('category',['category'=>$category]);

    }
    public function ajouter()
    {

        return view('addcategory');

    }
    public function store (Request $request)
        {
            // dd($request);
            $request->validate([
                'name' => 'required'

            ]);
            $newCategory = new Category();
            $newCategory->name=$request->name;
            $newCategory->save();
            return redirect('/category');
        }

public function delete($id)
{
    $category = Category::find($id);

        // Supprimer la catégorie
        $category->delete();
        return Redirect('/category');

}


}
