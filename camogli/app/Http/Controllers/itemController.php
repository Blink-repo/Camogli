<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\item;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $items = item::all();
        $categories = category::all();

        return view("admin.items.item")->with('items', $items)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $categories = category::all();

        return view("admin.items.create")->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
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

        $item = item::create($store);

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $item->addMediaFromRequest('image')->toMediaCollection('item');
        }else{
            return 'Invalid File';
        }
        return redirect('/item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $item = item::find($id);
        $categories = category::all();

        return view("admin.items.edit")->with('item', $item)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {

        $item = item::find($id);

        $store = $request->all();
        if(array_key_exists('active', $store)){
            $store['active'] = 1;
        }else{
            $store['active'] = 0;
        }
        if(array_key_exists('featured', $store)){
            $store['featured'] = 1;
        }else{
            $store['featured'] = 0;
        }

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $Media = Media::where('model_id', [$id])->first();
            if (!$Media == null)
                $Media->delete();

            $item->addMediaFromRequest('image')->toMediaCollection('item');
        }

        $item->update($store);

        return redirect('/item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        item::find($id)->delete();
        return redirect('/item');

    }
}
