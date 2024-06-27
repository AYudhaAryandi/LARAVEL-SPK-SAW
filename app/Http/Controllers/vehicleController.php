<?php

namespace App\Http\Controllers;

use id;
use App\Models\vehicle;
use Illuminate\Http\Request;

class vehicleController extends Controller {

    public function index() {
        return view('dashboard/vehicle/index', [
            'users' => vehicle::all(),
            'title' => 'Data kendaraan'
        ]);
    }
    public function add() {
        return view('dashboard/vehicle/add',[
            // 'title' => 'Tambah Data vehicle'
        ]);
    }
    public function edit($id){

        $kendaraan= vehicle::where('id', $id)->first();

        return view('dashboard/vehicle/edit', [
            'vehicle' => $vehicle,
            'title' => 'Edit Data vehicle'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_kendaraan     = $request->input('nama_kendaraan');
        $harga       = $request->input('harga');
        $status   = $request->input('status');
        $deskripsi = $request->input('deskripsi');

        $kendaraan= vehicle::where('id', $id)->first();
        $vehicle->nama_kendaraan   = $nama_kendaran;
        $vehicle->harga     = $harga;
        $vehicle->status = $status;
        $vehicle->deskripsi = $deskripsi;

        $vehicle->save();

        return redirect()->to('/vehicle');
    }


    public function dashboard(){
        $vehicle= vehicle::count();

        return view('dashboard/vehicle/index', compact('vehicle'));

    }

    public function store(Request $request) {
        $nama_kendaraan     = $request->input('nama_kendaraan');
        $harga       = $request->input('harga');
        $status   = $request->input('status');
        $deskripsi = $request->input('deskripsi');

        $kendaraan          = new vehicle;
        $vehicle->nama_kendaraan   = $nama_kendaran;
        $vehicle->harga     = $harga;
        $vehicle->status = $status;
        $vehicle->deskripsi = $deskripsi;

        $vehicle->save();

        return redirect()->to('/vehicle');
    }
    public function delete($id) {
        $kendaraan= vehicle::where('id', $id)->first();
        $vehicle->delete();
        return redirect()->back();
    }
}
