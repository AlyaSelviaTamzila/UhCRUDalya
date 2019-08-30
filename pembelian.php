<?php

namespace App\Http\Controllers;
use App\modelPembelian;
use Illuminate\Http\Request;
use Validator;

class pembelian extends Controller{
  public function index(){
    $data = modelPembelian::all();
    return view('pembelian', compact('data'));
    // return view('newkontak', compact('data'));
  }

  public function create(){
    return view('pembelian_create');
  }

  public function store(Request $request){
    $this->validate($request,[
        'kode_barang' => 'required',
        'jumlah' => 'required',
        'total_harga' => 'required',
    ]);
 
    $data = new modelPembelian();
    $data->kode_barang = $request->kode_barang;
    $data->jumlah = $request->jumlah;
    $data->total_harga = $request->total_harga;
    $data->save();

    return redirect()->route('pembelian.index')->with('alert_message', 'Berhasil menambah data!');
  }

  public function edit($id)
  {
    $data = modelPembelian::where('id', $id)->get();
    return view('pembelian_edit', compact('data'));
  }

  public function update(Request $request, $id)
  {
      $this->validate($request, [

      'kode_barang' => 'required',
      'jumlah' => 'required',
      'total_harga' => 'required',
      ]);

      $data = modelPembelian::where('id', $id)->first();
      $data->kode_barang = $request->kode_barang;
      $data->jumlah = $request->jumlah;
      $data->total_harga = $request->total_harga;
      $data->save();

      return redirect()->route('pembelian.index')->with('alert_message', 'Berhasil mengubah data data!');
  }

  public function destroy($id)
  {
    $data = modelPembelian::where('id', $id)->first();
    $data->delete();

    return redirect()->route('pembelian.index')->with('alert_message', 'Berhasil menghapus data!');
  }

}
