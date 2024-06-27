@extends('./layout/page2')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
            <h1>Data Kendaraan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kendaraan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
              <div class="card-header">
                <h3 class="card-title">Data Kendaraan Pilihan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('vehicle/add') }}" class="btn-sm btn-success">+ Tambah Kendaraan</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Kondisi</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $vehicle)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $vehicle->nama_kendaraan }}</td>
                    <td>{{ $vehicle->harga }}</td>
                    <td>{{ $vehicle->status }}</td>
                    <td>{{ $vehicle->deskripsi }}</td>
                    <td>
                      <a href="{{ url('vehicle/edit/'.$vehicle->id) }}" class="btn btn-outline-warning">Edit</a>
                      <a href="{{ url('vehicle/delete/'.$vehicle->id) }}" class="btn btn-outline-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection
