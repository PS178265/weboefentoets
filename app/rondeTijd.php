<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class rondeTijd extends Model
{
    static public function getMerken(){
        return DB::table('rondetijden')->select('Merk')->distinct()->get();
    }

    static public function getRondenTijd($merk, $sircuit){
        return  DB::table('rondetijden')->select('Model', 'Magazine', $sircuit.' as rondentijd')
                ->where('Merk', $merk)
                ->orderBy('rondentijd')
                ->limit(3)
                ->get();
    }
}
