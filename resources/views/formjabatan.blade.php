@extends('layouts.main')

@section('content')

<main class="main-content  mt-0">
    <div class="container">
        <div class="col-xl-9 col-lg-7 col-md-7 mx-auto">
            <div class="card z-index-0">
                <div class=" text-center pt-4">
                    <h5>Form Master Jabatan</h5>
                </div>
                <div class="row px-xl-5 px-sm-4 px-3">
                    <div class="card-body">
                        <form role="form">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nama Jabatan" aria-label="Nama Jabatan">
                            </div>
                            <div class="mb-3">
                                <input type="kode" class="form-control" placeholder="Kode Jabatan" aria-label="Kode Jabatan">
                            </div>
                            <div class="mb-3">
                                <select class="ui search dropdown">
                                    <option value="">Level</option>
                                    <option value="staff">Staff</option>
                                    <option value="direktur">Direktur</option>
                                    <option value="manager">Manager</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm ms-auto text-white"><a href="{{url('/jabatan')}}">Simpan</button></a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

</main>
@endsection