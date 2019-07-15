@extends('admin.template')

@section('main')
<!-- Nested Row within Card Body -->
<div class="row">
          <div class="col-lg-5 d-none "></div>
          <div class="col-lg-7">
    
                
                <h1 class="h4 text-gray-900 mb-4">Menambahkan Produk</h1>
              
              <form class="contrainer" action="{{route('Product.store')}}" enctype="multipart/form-data" method="POST">
                {!! csrf_field() !!}

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="namaproduk" placeholder="Nama Brand">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="series" placeholder="Series">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="ukuran" placeholder="Ukuran">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="harga" placeholder="Harga">
                </div>
                <h5>Pilih Gambar<h5>
                <div class="form-group">
                  <input type="file" class="form-control form-control-user" id="exampleInputEmail" name="gambar" placeholder="Gambar">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Tambahkan</button>
              </form>
            </div>
          </div>
        </div>
        @stop