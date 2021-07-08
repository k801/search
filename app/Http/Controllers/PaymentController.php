<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payment.index');
    }



    public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xls,xlsx'
    ]);

    $path = $request->file('file')->getRealPath();
    $data = Excel::load($path)->get();

    if ($data->count()) {
        foreach ($data as $key => $value){
            $arr[] = [
                'NOMBRE' => $value->name,
                'CEDULA' => $value->card,
                'CARNET' => $value->scard,
                'TIPO-USUARIO' => $value->user_type_id,
                'CORREO' => $value->email,
                'PASSWORD' => $value->password,
            ];
        }

        if (!empty($arr)) {
            User::insert($arr);
        }
    }
    return redirect('/imports');
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
