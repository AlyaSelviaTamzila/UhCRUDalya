<?php

namespace App\Http\Controllers;
use App\modelBarang;
use Illuminate\Http\Request;
use Validator;

class barang extends Controller{
  public function index(){
    $data = modelBarang::all();
    return view('barang', compact('data'));
    // return view('newkontak', compact('data'));
  }

  public function create(){
    return view('barang_create');
  }

  public function store(Request $request){
    $this->validate($request,[
      'code' => 'required',
      'nama' => 'required',
      'stok' => 'required',
      'harga' => 'required',
    ]);
 
    $data = new modelBarang();
    $data->code = $request->code;
    $data->nama = $request->nama;
    $data->stok = $request->stok;
    $data->harga = $request->harga;
    $data->save();

    return redirect()->route('barang.index')->with('alert_message', 'Berhasil menambah data!');
  }

  public function edit($id)
  {
    $data = modelBarang::where('id', $id)->get();
    return view('barang_edit', compact('data'));
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [

      'code' => 'required',
      'nama' => 'required',
      'stok' => 'required',
      'harga' => 'required',
      ]);

      $data = modelBarang::where('id', $id)->first();
      $data->code = $request->code;
      $data->nama = $request->nama;
      $data->stok = $request->stok;
      $data->harga = $request->harga;
      $data->save();

      return redirect()->route('barang.index')->with('alert_message', 'Berhasil mengubah data data!');
  }

  public function destroy($id)
  {
    $data = modelBarang::where('id', $id)->first();
    $data->delete();

    return redirect()->route('barang.index')->with('alert_message', 'Berhasil menghapus data!');
  }

}
