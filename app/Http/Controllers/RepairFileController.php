<?php

namespace App\Http\Controllers;

use App\Models\RepairFile;
use Illuminate\Http\Request;

class RepairFileController extends Controller
{
    public function store(Request $request){

        if($request->file('file')){
            //dd($request);

            $filename = $request->file('file')->getClientOriginalName();
            $filesize = $request->file('file')->getSize();
            $fileext = $request->file('file')->getExtension();
            $filepath = $request->file('file')->storeAs('repairfiles', time().'_'.$filename, 'public');


            $f = new RepairFile();
            $f->file_name = $filename;
            $f->storage_path = $filepath;
            $f->repair_id = $request->get('repair_id');
            $f->size = $filesize;
            $f->file_ext = $fileext;
            $f->type = $request->get('filetype');
            $f->save();

        }

        return redirect()->action('RepairController@show', [$request->get('repair_id')]);
    }

    public function download($id){

    }

    public function delete($id){

    }
}
