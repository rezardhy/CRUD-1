<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class pertanyaanModel{

    public static function get_all(){
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;

    }
    public static function add_data($data){
        unset($data["_token"]);
        $pertanyaan_new = DB::table('pertanyaan')->insert($data);
        return $pertanyaan_new;

    }
    public static function find_id($id){
        //unset($data["_token"]);
        $jawaban_new = DB::table('pertanyaan')->where('id', $id)->get();
        //dd($jawaban_new);
        return $jawaban_new;

    }

    public static function update($data,$id){
        //unset($data["_token"]);
        $updateData = DB::table('pertanyaan')->where('id', $id)->update($data);
        //dd($updateData);
        return $updateData;

    }
    public static function delete($id){
        $delete = DB::table('pertanyaan')->where('id', $id)->delete();
        return $delete;

    }


}