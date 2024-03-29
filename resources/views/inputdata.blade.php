@extends('layouts.main')

@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <p class="text-uppercase text-sm">Form Data Pegawai</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                <input class="form-control" type="text" value="Lee MinHo">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Jabatan</label>
                <input class="form-control" type="jabatan" value="Chief Tehnology Officer ">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Pendidikan</label>
                <input class="form-control" type="pendidikan" value="Sarjana Sistem Informasi">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Gaji</label>
                <input class="form-control" type="text" value="Rp25.000.000-Rp40.000.000">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Contact Information</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">No.Telp</label>
                <input class="form-control" type="text" value="+62-895-0876-9844">
              </div>
            </div>
          <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <button class="btn btn-primary btn-sm ms-auto text-white"><a  href="{{url('/pegawai')}}">Simpan</button></a>
          </div>
        </div>
        </div>
      </div>
    </div>
    @endsection