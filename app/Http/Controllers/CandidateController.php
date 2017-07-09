<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;

class CandidateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = Input::file('image');

        $candidate = new Candidate;
        $candidate->image = base64_encode(file_get_contents($image->getRealPath()));
        $candidate->mimeType = File::mimeType($image->getRealPath());
        $candidate->name = Input::get('name');
        $candidate->description = Input::get('description');

    try { 
      $candidate->save();   
    } catch(QueryException $ex){ 
      return back();
    }
        return back(); 
    }
}
