<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\pertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function create(){
        return view('pertanyaanResources.form');
    }

    public function store(Request $request){

        //dd($request->all());
        $new_data = pertanyaanModel::add_data($request->all());
        return redirect('/pertanyaan');
    }
    public function index(){
        $data = pertanyaanModel::get_all();
        //dd($data);
        return view('pertanyaanResources.index', compact('data'));
    }

    public function detail($id,Request $request){

        $data = pertanyaanModel::find_id($id);
        //dd($data);
        return view('pertanyaanResources.detail', compact('data'));
    }

    public function edit($id){
        $data = pertanyaanModel::find_id($id);

        return view ('pertanyaanResources.edit' ,compact('data'));
    }

    public function update($id,Request $request){
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        //dd($data);
        $data = pertanyaanModel::update($data,$id);
        return  redirect('/pertanyaan');
    }

    public function destroy($id){
      
        $data = pertanyaanModel::delete($id);
        return  redirect('/pertanyaan');
    }

}
