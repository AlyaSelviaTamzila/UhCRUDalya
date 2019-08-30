@extends('template')
@section('content')
    <section class="main-section">
      <div class="content">
        <h1>Tambah Barang</h1>
        <hr>
        @if($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li><strong>{{ $error }}</strong>
            @endforeach
          </div>
        @endif

        <form action="{{ route('barang.store') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="code">Kode Barang:</label>
            <input type="text" class="form-control" id="code" name="code">
          </div>
          <div class="form-group">
            <label for="nama">Nama Barang:</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="stok">Stock:</label>
            <input type="text" class="form-control" id="stok" name="stok">
          </div>
          <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" class="form-control" id="harga" name="harga">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </section>
  @endsection
