@extends('layout.auth')
@section('content')
  <div class="content mt-7 p-7 m-7">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/assetsLogin/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Login dulu untuk melakukan perhitungan.</p>
            </div>

            <form action="/login" method="POST">
                @csrf

              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username">

                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--checkbox mb-0"><span class="caption"><a href="">Forgot Password?</a></span>
                </label>
              </div>
              <div class="mb-2 @error('password') mt-4 @enderror">
                Tidak mempunyai akun?
                <a href="/signup" class="text-decoration-none">Buat akun disini</a>
                </div>


              <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk Sekarang</button>
                    <p class="mt-3 mb-3 text-muted">&copy; SPK Rekomendasi Pemilihan Kendaraan {{ now()->year}}</p>
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
@endsection
