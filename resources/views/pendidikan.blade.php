@extends('layouts.main')

@section('content')

<main class="main-content  mt-0">
    <div class="container">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
                <div class=" text-center pt-4">
                    <h5>Form Pendidikan</h5>
                </div>
                <div class="row px-xl-5 px-sm-4 px-3">
                    <div class="card-body">
                        <form role="form">
                            <div class="mb-3">
                                <select class="ui search dropdown">
                                    <option value="">Jenjang Pendidikan</option>
                                    <option value="sd">SD</option>
                                    <option value="smp">SMP</option>
                                    <option value="sma">SMA</option>
                                    <option value="ahlimadya">D3</option>
                                    <option value="sarjana">Sarjana</option>
                                    <option value="magister">Magister</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="kode" class="form-control" placeholder="tahun masuk" aria-label="Tahun Masuk">
                            </div>
                            <div class="mb-3">
                                <input type="level" class="form-control" placeholder="tahun lulus" aria-label="Tahun Lulus">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm ms-auto text-white"><a href="{{url('/pegawai')}}">Simpan</button></a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

</main>
@endsection