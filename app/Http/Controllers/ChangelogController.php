<?php

namespace App\Http\Controllers;

use App\Models\Changelog;
use App\Models\ChangelogVersion;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Version;

class ChangelogController extends Controller
{
    public function index(){
        $editor = 0;
        if(\Auth::check()){
            if(\Auth::id() == 1){
                $editor = 1;
            }
        }
        if($editor == 1){
            $versions = ChangelogVersion::orderByDesc('published_at')->get();
        }else{
            $versions = ChangelogVersion::where('published', '=', 1)->orderByDesc('published_at')->get();
        }

        return view('changelog.index', [
            'editor' => $editor,
            'versions' => $versions,
        ]);
    }

    public function add_version(Request $request){
        $v = new ChangelogVersion;
        $v->version = $request->get('version');
        $v->description = $request->get('description');
        $v->published = 0;
        $v->published_at = now();
        $v->save();

        return redirect(action('ChangelogController@index'));
    }

    public function add_changelog(Request $request){
        $c = new Changelog;
        $c->version_id = $request->get('version_id');
        $c->type = $request->get('type');
        $c->description = $request->get('description');
        $c->save();

        return redirect(action('ChangelogController@index'));
    }

    public function publish_version(Request $request){
        $v = ChangelogVersion::where('id', '=', $request->get('version_id'))->first();
        $v->published = 1;
        $v->published_at = now();
        $v->save();

        return redirect(action('ChangelogController@index'));
    }
}
