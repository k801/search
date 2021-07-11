<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Sponser;
use App\Models\Product;
use App\Models\Account;
use App\Models\Acount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{



    public function index()
    {

        return view('search.index');
    }


public function newtable()
{


$ids=DB::table('clients')->get();




    foreach($ids as $data)
    {


        $id_check=DB::table('accounts')->where('id_n',$data->id_no)->count();
        if($id_check == 0){
       DB::table('accounts')->insert(['name' => $data->name, 'id_n'=>$data->id_no,'mob1'=>$data->phone1,'mob2'=>$data->phone2,'mob3'=>$data->phone3,'type'=>1,'date'=>$data->date,'time'=>$data->time]);



    }
    }




}

function update_phone1()
{


    $accounts=Account::where('mob1','NOT LIKE', '0%')->get();

    foreach($accounts as $account)
    {

        $account->update([
            'mob1'=>'0'.$account->mob1,
        ]);


    }
}

function update_phone2()
{
    // $phones=Account::all();
    // $phones=Account::select(['mob1'])->first();

    $accounts=Account::where('mob2','NOT LIKE', '0%')->get();
    // dd($accounts);

    foreach($accounts as $account)
    {
        ///
        $account->update([
            'mob2'=>'0'.$account->mob1,
        ]);


    }
}
function update_phone3()
{
    // $phones=Account::all();
    // $phones=Account::select(['mob1'])->first();

    $accounts=Account::where('mob3','NOT LIKE', '0%')->get();
    // dd($accounts);

    foreach($accounts as $account)
    {
        ///
        $account->update([
            'mob3'=>'0'.$account->mob1,
        ]);


    }
}


  public function search(Request $request)
  {
// dd("j");

    try{
        $searchTerm=$request->searchTerm;
        $item=$request->item;

        $item1 = Client::where($searchTerm, $item)->first();
// dd($item1);
        $client_id=$item1->id;

        $item2 = Product::where('id', $client_id)->first();


        $item3 = Sponser::where('id', $client_id)->first();

        return view('search.results')->with([
            'item1'=>$item1,
            'item2'=>$item2,
            'item3'=>$item3,
        ]);

    }catch(\Exception $e)
    {


        return redirect()->route('get-form')->withErrors(['error'=>$e->getMessage()]);




    }


    // $data=$item1;
    // $data=$item2;
    // $data=$item3;

    return view('search.results')->with([
        'item1'=>$item1,
        'item2'=>$item2,
        'item3'=>$item3,
    ]);
  }






}
