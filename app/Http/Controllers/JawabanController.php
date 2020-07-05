<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\jawabanModel;
use App\models\pertanyaanModel;

class JawabanController extends Controller
{
    //
    public function store($pertanyaan_id,Request $request){

        //dd($request->all());
        $new_data = jawabanModel::add_data($request->all());
        return redirect('/pertanyaan');
    }


    public function index($id){
        $datas = jawabanModel::find_id($id);
        $data = pertanyaanModel::find_id($id);
        //dd($data);
        if ($datas == "") {
            # code...
            return view('jawabanResources.lihatjawaban2');
        }
        else{
            return view('jawabanResources.lihatjawaban', compact('datas','data'));
        }
    }
}
