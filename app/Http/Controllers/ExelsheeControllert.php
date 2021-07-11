<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelsheetsImport;

class ExelsheeControllert extends Controller
{
    public function imporExcelsheet()
    {
       return view('excelsheet.index');
    }


    public function import(Request $request)
    {
        // dd($request->all());
        Excel::import(new ExcelsheetsImport,request()->file('file'));
        toastr()->success('files uploads mn');
       return back();
    }



}
