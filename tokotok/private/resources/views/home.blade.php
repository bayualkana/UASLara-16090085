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
            <a href="{{ route('produk.create') }}" class="btn btn-primary btn-icon-split">
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
                      <th>Tanggal Rilis</th>
                      <th>Harga</th>
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
                    <tr>
                      <td>Nike</td>
                      <td>System Architect</td>
                      <td>38-44</td>
                      <td>2011/04/25</td>
                      <td>Rp 450.000</td>
                    </tr>
                    
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

