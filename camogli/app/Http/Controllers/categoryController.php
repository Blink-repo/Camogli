<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $category = category::all();
        return view("category.Category")->with('categories', $category);
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        return view("category.create");
    }


    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "image"=>"required"
            ]);

        $store = $request->all();
        if(array_key_exists('active', $store)){
            $store['active'] = 1;
        }
        if(array_key_exists('featured', $store)){
            $store['featured'] = 1;
        }

        $category = category::create($store);

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $category->addMediaFromRequest('image')->toMediaCollection('category');
        }else{
            return 'something went wrong';
        }
        return redirect('/category');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $category = category::find($id);
        return view("category.edit")->with('category', $category);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $category = category::find($id);

        $store = $request->all();
        if(array_key_exists('active', $store)){
            $store['active'] = 1;
        }
        if(array_key_exists('featured', $store)){
            $store['featured'] = 1;
        }

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $Media = Media::where('model_id', [$id])->first();
            if (!$Media == null)
                $Media->delete();

            $category->addMediaFromRequest('image')->toMediaCollection('category');
        }

        $category->update($store);

        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        category::find($id)->delete();
        return redirect('/category');
    }
}
