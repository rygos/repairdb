<?php

namespace App\Http\Controllers;

use App\Models\RepairFile;
use Illuminate\Http\Request;

class RepairFileController extends Controller
{
    public function store(Request $request){
        if($request->file('repfile')){
            //dd($request);

            $filename = $request->file('repfile')->getClientOriginalName();
            $filesize = $request->file('repfile')->getSize();
            $fileext = $request->file('repfile')->getExtension();
            $filepath = $request->file('repfile')->storeAs('repairfiles', time().'_'.$filename, 'public');


            $f = new RepairFile();
            $f->file_name = $filename;
            $f->storage_path = $filepath;
            $f->repair_id = $request->get('repair_id');
            $f->size = $filesize;
            $f->file_ext = $fileext;
            $f->type = $request->get('filetype');
            $f->save();

            //dd($fileModel);
        }

        return redirect()->action('RepairController@show', [$request->get('repair_id')]);
    }

    public function download($id){

    }

    public function delete($id){

    }
}
