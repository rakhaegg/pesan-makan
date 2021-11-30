<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTokoRequest;
use App\Http\Resources\TokoResources;
use App\Models\Toko;

class TokoController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       return TokoResources::collection(Toko::all());
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreTokoRequest $request)
   {
       //$toko = auth()->user()->create($request->validated());
       
  
        
       return new TokoResources(Toko::create($request->validated()));
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function show(Toko $toko)
   {
       return new TokoResources($toko);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function update(StoreTokoRequest $request, Toko $toko)
   {
       $toko->update($request->validated());

       return new TokoResources($toko);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function destroy(Toko $toko)
   {
       $toko->delete();

       return response()->noContent();
   }
}

