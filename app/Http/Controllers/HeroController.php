<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Emergency;
class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index()
    {

        $hero = \App\Hero::orderBy('name', 'asc')->get();
        $view = view('hero/index');
        $view->hero = $hero;
        return $view;
    }

    public function store(Request $request )
    {
        $emergency = Emergency::create([
            'subject' => $request->subject,
            'description' => $request->description
        ]);

            return redirect(action('HeroController@index'));
    }
}



     
        
        
       