<?php

namespace App\Http\Controllers;

use App\Models\restaurant;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class restaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $restaurant = restaurant::all();
        return view('admin.restaurant.restaurant')->with('restaurant', $restaurant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $res = restaurant::find($id);

        $store = $request->all();

        //dum dum change to a for loop you dum bitch shame on you!

        if($store['maopen'] == null){
            $store['maopen'] = 'closed';
            $store['maclose'] = 'closed';
        }
        if($store['diopen'] == null){
            $store['diopen'] = 'closed';
            $store['diclose'] = 'closed';
        }
        if($store['woopen'] == null){
            $store['woopen'] = 'closed';
            $store['woclose'] = 'closed';
        }
        if($store['doopen'] == null){
            $store['doopen'] = 'closed';
            $store['doclose'] = 'closed';
        }
        if($store['vropen'] == null){
            $store['vropen'] = 'closed';
            $store['vrclose'] = 'closed';
        }
        if($store['zaopen'] == null){
            $store['zaopen'] = 'closed';
            $store['zaclose'] = 'closed';
        }
        if($store['zoopen'] == null){
            $store['zoopen'] = 'closed';
            $store['zoclose'] = 'closed';
        }

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $Media = Media::where('model_id', [$id])->first();
            if (!$Media == null)
                $Media->delete();

            $res->addMediaFromRequest('image')->toMediaCollection('logo');
        }

        $res->update($store);

        return redirect('/restaurant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
