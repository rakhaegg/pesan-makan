<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\StoreTokoRequest;
use App\Http\Resources\DrinkResource;
use App\Http\Resources\FoodResource;
use App\Models\Drink;
use App\Models\Food;
class DrinkController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       return DrinkResource::collection(Drink::all());
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreDrinkRequest $request)
   {
       //$toko = auth()->user()->create($request->validated());
       
  
        
       return new DrinkResource(Drink::create($request->validated()));
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function show(Drink $toko)
   {
       return new DrinkResource($toko);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function update(StoreDrinkRequest $request, Drink $toko)
   {
       $toko->update($request->validated());

       return new DrinkResource($toko);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function destroy(Drink $toko)
   {
       $toko->delete();

       return response()->noContent();
   }
}
