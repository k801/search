<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class NewClientController extends Controller
{
    public function importExportView()
    {
       return view('payment.index');
    }

    /**
    * @return \Illuminate\Support\Collection
    */

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request)
    {
        // dd($request->all());
        Excel::import(new ClientsImport,request()->file('file'));
        toastr()->success('files uploads mn');
       return back();
    }

}
