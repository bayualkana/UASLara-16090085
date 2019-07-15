@extends('admin.template')

@section('main')
<div id="index">
  <div id="content">

          <!-- Topbar -->
          
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
            </div>
            <div class="card-body">
            <a href="{{ route('Product.create') }}" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                    </span>
                    <span class="text">Tambahkan</span>
                  </a>
                  <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Produk</th>
                      <th>Series</th>
                      <th>Ukuran</th>
                      <th>Harga</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <!-- <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> -->
                  <tbody>
                  @foreach($produk as $data)
                    <tr>
                      <td>{{$data->namaproduk}}</td>
                      <td>{{$data->series}}</td>
                      <td>{{$data->ukuran}}</td>
                      <td>{{$data->harga}}</td>
                      <td><img src="{{asset('private/storage/app/public/gambar/'.$data->gambar)}}" style="width: 100px; "></td>
                        <td><a href = "{{route('Product.edit', $data->id)}}" class="btn btn-primary" style="width: 70px">Edit</a>
                        <a href = "{{route('HapusProduk', $data->id)}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

          </div>
          <!-- /.container-fluid -->

    </div>
</div>
@stop

@section('footer')
<footer id="footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
</footer>
@stop

