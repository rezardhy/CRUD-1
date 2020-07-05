<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class jawabanModel{

    public static function get_all(){
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;

    }
    public static function add_data($data){
        unset($data["_token"]);
        $jawaban_new = DB::table('jawaban')->insert($data);
        return $jawaban_new;

    }

    public static function find_id($id){
        //unset($data["_token"]);
        $jawaban_new = DB::table('jawaban')->where('Pertanyaan_id', $id)->get();
        //dd($jawaban_new);
        return $jawaban_new;

    }

}