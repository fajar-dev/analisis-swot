<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SwotController extends Controller
{
    public function index(){
        $data['strength'] = DB::table('strengths')->get();
        $data['weakness'] = DB::table('weaknesses')->get();
        $data['opportunity'] = DB::table('opportunities')->get();
        $data['threats'] = DB::table('threats')->get();

        dd($data);
        return view('index', compact('data'));
    }

    public function strength(Request $request){
        DB::table('strengths')->insert([
            'faktor_strategis' => $request->faktor,
            'bobot' => $request->bobot,
            'rating' => $request->bobot,
            'score' => $request->bobot * $request->bobot,
        ]);
        return redirect()->route('index')->with('success', "Schedule has been added successfully");
    }

    public function weakness(Request $request){
        DB::table('weaknesses')->insert([
            'faktor_strategis' => $request->faktor,
            'bobot' => $request->bobot,
            'rating' => $request->bobot,
            'score' => $request->bobot * $request->bobot,
        ]);
        return redirect()->route('index')->with('success', "Schedule has been added successfully");
    }

    public function opportunity(Request $request){
        DB::table('opportunities')->insert([
            'faktor_strategis' => $request->faktor,
            'bobot' => $request->bobot,
            'rating' => $request->bobot,
            'score' => $request->bobot * $request->bobot,
        ]);
        return redirect()->route('index')->with('success', "Schedule has been added successfully");
    }

    public function threats(Request $request){
        DB::table('threats')->insert([
            'faktor_strategis' => $request->faktor,
            'bobot' => $request->bobot,
            'rating' => $request->bobot,
            'score' => $request->bobot * $request->bobot,
        ]);
        return redirect()->route('index')->with('success', "Schedule has been added successfully");
    }
}
