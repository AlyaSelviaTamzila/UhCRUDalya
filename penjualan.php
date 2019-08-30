<?php

namespace App\Http\Controllers;
use App\modelPenjualan;
use Illuminate\Http\Request;
use Validator;

class penjualan extends Controller{
  public function index(){
    $data = modelPenjualan::all();
    return view('penjualan', compact('data'));
    // return view('newkontak', compact('data'));
  }

  public function create(){
    return view('penjualan_create');
  }

  public function store(Request $request){
    $this->validate($request,[
        'kd_barang' => 'required',
        'jumlah' => 'required',
        'total_harga' => 'required',
    ]);
 
    $data = new modelPenjualan();
    $data->kd_barang = $request->kd_barang;
    $data->jumlah = $request->jumlah;
    $data->total_harga = $request->total_harga;
    $data->save();

    return redirect()->route('penjualan.index')->with('alert_message', 'Berhasil menambah data!');
  }

  public function edit($id)
  {
    $data = modelPenjualan::where('id', $id)->get();
    return view('penjualan_edit', compact('data'));
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [

      'kd_barang' => 'required',
      'jumlah' => 'required',
      'total_harga' => 'required',
      ]);

      $data = modelPenjualan::where('id', $id)->first();
      $data->kd_barang = $request->kd_barang;
      $data->jumlah = $request->jumlah;
      $data->total_harga = $request->total_harga;
      $data->save();

      return redirect()->route('penjualan.index')->with('alert_message', 'Berhasil mengubah data data!');
  }

  public function destroy($id)
  {
    $data = modelPenjualan::where('id', $id)->first();
    $data->delete();

    return redirect()->route('penjualan.index')->with('alert_message', 'Berhasil menghapus data!');
  }

}
