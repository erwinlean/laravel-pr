<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    public function getCategory(){
        return response()->json(category::all(), 200);
    }

    public function getCategoryById($id){
        $category = category::find($id);

        if(is_null($category)){
            return response()->json(['message'=>'Register not found.'], 404);
        }

        return response()->json($category::find($id), 200);
    }

    public function postCategory(request $requestData){
        $category = category::create($requestData->all());

        return response($category, 201);
    }

    public function updateCategory(request $requestData, $id){
        $category = category::find($id);

        if(is_null($category)){
            return response()->json(['message'=>'Register not found for update.'], 404);
        }

        $category->update($requestData->all());

        return response($category, 200);
    }

    // should be deleted by logic (true or false, not this.)
    public function deleteCategory($id){
        $category = category::find($id);

        if(is_null($category)){
            return response()->json(['message'=>'Register not found for delete.'], 404);
        };

        $category -> delete($id);

        return response()->json(['message'=> 'Category deleted succefull.'], 200);
    }
}