@extends('./layout/page2')

@section('content')
  <section class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
            <h1>Edit Data vehicle</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data vehicle</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <section class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
              <div class="card-header">
                <h3 class="card-title">Edit Data Kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/vehicle/update/'.$vehicle->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_vehicle" class="col-sm-2 col-form-label">Nama Kendaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_vehicle" placeholder="Nama vehicle" value="{{ $vehicle->nama_vehicle}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="harga" placeholder="Harga" value="{{ $vehicle->harga}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Kondisi</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="status" value="{{ $vehicle->status}}" required>
                          <option>-- Status --</option>
                          <option>Bekas</option>
                          <option>Baru</option>
                        </select>
                         {{-- <input type="text" class="form-control" name="status" placeholder="status" required> --}}
                      </div>
                  </div>

                  <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{ $vehicle->deskripsi}}" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button style="background-color: #198754;" type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
