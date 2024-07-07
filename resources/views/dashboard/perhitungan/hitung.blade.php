@extends('layout.page2')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
            <h1>Perhitungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
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
                <h3 class="card-title">Bobot</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>10</th>
                    <th>20</th>
                    <th>30</th>
                    <th>30</th>
                    <th>10</th>
                  </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      {{-- </div> --}}
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
                <h3 class="card-title">Normalisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                </tr>
                </thead>
                <tbody>

                 @foreach ($results as  $result)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $result['nama_alternatif'] }}</td>
                        <td>{{ $result['kriteria_1'] }}</td>
                        <td>{{ $result['kriteria_2'] }}</td>
                        <td>{{ $result['kriteria_3'] }}</td>
                        <td>{{ $result['kriteria_4'] }}</td>
                        <td>{{ $result['kriteria_5'] }}</td>
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
      {{-- </div> --}}
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
                <h3 class="card-title">Hasil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Alternatif</th>
                    <th>Hasil</th>
                </tr>
                </thead>
                <tbody>
                 @foreach ($results as  $result)
                <tr>
                    <td>{{ $result['nama_alternatif'] }}</td>
                    <td>{{ $result['hasil'] }}</td>
                </tr>

                @endforeach

                {{-- @endforeach --}}
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      {{-- </div> --}}
    </section>


  </div>

  @endsection
