<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
   public function search( Request $request)
   {


    return view('search.index');

   }



public function searchItem( Request $request)

{

    $results = Item::when(request()->has('category'), function($q){
        $q->where('category', request('category'));
    })->when(request()->has('scategory'), function($q){
        $q->where('scategory', request('scategory'));
    })->get();


dd($results);



}



}
