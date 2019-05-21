<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rondeTijd;

class rondeTijdController extends Controller
{
    // public function getIndex(){
    //     $data = array(
        //     'title' => 'Hallo!',
        //     'autos' => ['Opel', 'Mersedes', 'audi']
        // );
        // return view('rondes')->with($data);
        //
        //return view('rondes', array('merken'=> $merken));
    // }

    public function getIndex(){
        $merken = rondeTijd::getMerken();
        $rondetijd = rondeTijd::getRondenTijd('Audi','Bedford');
        
        return view('rondes')->with(['merken'=>$merken, 'rondes'=>$rondetijd]);
    }

    public function postIndex(Request $request){
        $merk = $request->input('merk');
        $circuit = $request->input('circuit');

        $merken = rondeTijd::getMerken();
        $rondetijd = rondeTijd::getRondenTijd($merk, $circuit);
        
        return view('rondes')->with(['merken'=>$merken, 'rondes'=>$rondetijd]);
    }
}
