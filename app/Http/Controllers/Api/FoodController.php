<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\StoreTokoRequest;
use App\Http\Resources\FoodResource;
use App\Models\Food;


class FoodController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       return FoodResource::collection(Food::all());
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreFoodRequest $request)
   {
       //$toko = auth()->user()->create($request->validated());
       
  
        
       return new FoodResource(Food::create($request->validated()));
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function show(Food $toko)
   {
       return new FoodResource($toko);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function update(StoreFoodRequest $request, Food $toko)
   {
       $toko->update($request->validated());

       return new FoodResource($toko);
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Category  $category
    * @return \Illuminate\Http\Response
    */
   public function destroy(Food $toko)
   {
       $toko->delete();

       return response()->noContent();
   }
}
