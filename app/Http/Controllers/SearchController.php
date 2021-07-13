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




    public function fetch_img_key()
    {

    //  $img_keys=DB::table('old_items')->get();

    //  $img_keys = DB::table('items')->select('img_key')->get();

     $items= DB::table('items')->get();


        foreach($items as $item)
        {


            $img_key=DB::table('img_key')->where('img_key',$item->img_key)->count();
            if($img_key== 0){
              $old_img_keys=DB::table('old_img_key')->where('img_key',$item->img_key)->get();
               foreach($old_img_keys as $old_img_key)
               {

                DB::table('img_key')->insert(['img_key' => $item->category,'img'=>$item->scategory,'type'=>$item->brand]);


               }


            }


        }




    }


    public function fetch_att_key()
    {

     $items= DB::table('items')->get();


        foreach($items as $item)
        {


            $att_key=DB::table('item_attributes')->where('att_key',$item->att_key)->count();

            if($att_key== 0){
              $old_att_keys=DB::table('old_item_attributes')->where('att_key',$item->att_key)->get();
               foreach($old_att_keys as $old_att_key)
               {

                DB::table('item_attributes')->insert(['att_key'=> $old_att_key->att_key,'name'=>$old_att_key->name,'att_val'=>$old_att_key->att_val,'sort'=>$old_att_key->sort]);


               }


            }

        }




    }


    public function fetch_meta_key()
    {

     $items= DB::table('items')->get();
     $array=array();

        foreach($items as $item)
        {


            $att_key=DB::table('item_meta')->where('meta_key',$item->meta_key)->count();

            if($att_key== 0){
              $old_att_keys=DB::table('old_item_meta')->where('meta_key',$item->meta_key)->get();
               foreach($old_att_keys as $old_att_key)
               {

                DB::table('item_meta')->insert(['meta_key'=> $old_att_key->meta_key,'name'=>$old_att_key->name]);

               }


            }
        }


dd($array);

    }




    public function items_east_essa()
    {

     $items=DB::table('old_items')->get();




        foreach($items as $item)
        {


            $url=DB::table('items')->where('url',$item->url)->count();
            if($url== 0){
                 DB::table('items')->insert(['category' => $item->category,'scategory'=>$item->scategory,'brand'=>$item->brand,'name'=>$item->name,'name_ar'=>$item->name_ar,'model'=>$item->model,'model_ar'=>$item->model_ar,'short'=>$item->short,'short_ar'=>$item->short_ar,'des'=>$item->des,'des_ar'=>$item->des_ar,'stock'=>$item->stock,'old_price'=>$item->old_price,'price'=>$item->price,'c_price'=>$item->c_price,'p_price'=>$item->c_price,'weight'=>$item->weight,'img'=>$item->img,'point'=>$item->point,'img_key'=>$item->img_key,'att_key'=>$item->att_key,'views'=>$item->views,'option_key'=>$item->option_key,'meta_key'=>$item->meta_key,'published'=>$item->published,'type'=>$item->type,'seller'=>$item->seller,'agent'=>$item->agent,'date'=>$item->date,'time'=>$item->time,'API_code'=>$item->API_code,'url'=>$item->url,'os_system'=>0,'processor'=>0,'processor_g'=>0,'color'=>0]);
            }


        }
    }

























public function get_form_backup()
{

    return view('areas.backup');
}

    public function backup_database()
    {
        $mysqlHostName      = env('DB_HOST');
        $mysqlUserName      = env('DB_USERNAME');
        $mysqlPassword      = env('DB_PASSWORD');
        $DbName             = 'myproject';
        // $backup_name        = "backup.sql";
        // $tables             = array("accounts","clients","excelsheet","	sponsors","users"); //here your tables...

        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8",'root','',array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        // $result = $statement->fetchAll();

        $result = $connect->query("SHOW TABLES");

          while ($row = $result->fetch(\PDO::FETCH_NUM)) {
            // echo $row[0]."<br>";
            $tables[]= $row[0];
            }
            // dd($tables);
        $output = '';
        foreach($tables as $table)
        {
            $show_table_query = "SHOW CREATE TABLE " . $table . "";
            $statement = $connect->prepare($show_table_query);
            $statement->execute();
            $show_table_result = $statement->fetchAll();

            foreach($show_table_result as $show_table_row)
            {
                $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
            }
            $select_query = "SELECT * FROM " . $table . "";
            $statement = $connect->prepare($select_query);
            $statement->execute();
            $total_row = $statement->rowCount();

            for($count=0; $count<$total_row; $count++)
            {
                $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                $table_column_array = array_keys($single_result);
                $table_value_array = array_values($single_result);
                $output .= "\nINSERT INTO $table (";
                $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
                $output .= "'" . implode("','", $table_value_array) . "');\n";
            }
        }
        $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
        $file_handle = fopen($file_name, 'w+');
        fwrite($file_handle, $output);
        fclose($file_handle);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_name));
        ob_clean();
        flush();
        readfile($file_name);
        unlink($file_name);
    }
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
