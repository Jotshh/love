<?php

namespace App\Http\Controllers;

use App\Models\Ana;
use Illuminate\Http\Request;

class AnaController extends Controller
{
    public function index()
    {
       // dd('ola mundo');
       $anas = Ana::all();
       
       return view('fotos.index',['anas'=>$anas]);
    }

    public function create()
    {
        return view('fotos.create');
    }
    public function store(Request $request){
        Ana::create($request->all());
        return redirect()->route('fotos-index');
    }
    public function edit($id){
        $fotos = Ana::where('id',$id)->first();
        if(!empty($fotos)){
            return view('fotos.edit',['fotos'=>$fotos]);
        }
        else{
            return redirect()->route('fotos-index');
        }
    }
    public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano' => $request->ano,
            'valor' => $request->valor, 
        ];
        Ana::where('id', $id)->update($data);
        return redirect()->route('fotos-index');
    }

    public function destroy($id){
        Ana::where('id', $id)->delete();
        return redirect()->route('fotos-index');
    }

}
