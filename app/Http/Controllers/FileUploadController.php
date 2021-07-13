<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\storage;
class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUpload()
    {
        return view('fileUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
    //     $request->validate([
    //         // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
    //     ]);

    //     $fileName = time().'.'.$request->file->extension();

    //     $request->file->move(public_path('uploads'), $fileName);

        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);


    }



  public function moveImage(Request $request)

    {
        // $path = Storage::disk('public')->exists('index.php');


      $fileName= File::move(public_path('exist/test.png'), public_path('move/test_move.png'));



        return back()
        ->with('success','You have successfully moved file.')
        ->with('file',$fileName);

    }
    // $move = File::move($old_path, $new_path);












}
