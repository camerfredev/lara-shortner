<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function postIndex(Request $request)
    {
        
    $this->validate($request,[
        'url'=>'required|url'
    ]);
    

    $url = $this->getUrl($request->url);

    return view('result')->with('shortened',$url->shoten);

    }


    public function show($shortened)
    {
        $url = Url::where('shoten',$shortened)->firstOrFail();

        
            return redirect($url->url);
    
    }


    protected function getUrl($url)
    {
               
        return Url::firstOrCreate(
            ['url'=>$url],
            ['shoten'=>Url::get_unique_short_url(),]
       );
    
    }

}
    


