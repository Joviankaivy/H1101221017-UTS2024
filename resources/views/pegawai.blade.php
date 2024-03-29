@extends('layouts.main')

@section('content')

<h1 class="font-weight-bolder text-white mb-0">Data Pegawai</h1>

<div class="row mt-4">
    <div class="col-lg-11 mb-lg-0 mb-6">
        <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-2">Kepegawaian</h6>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary btn-sm ms-auto text-white"><a href="{{url('/inputdata')}}">Form Data Pegawai</button></a>
                                </div>
                            </div>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Lengkap</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jabatan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pendidikan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gaji</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://rakcer.id/wp-content/uploads/2023/11/foto-jungkook-wamil-608x675.webp" class="avatar avatar-sm me-3" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Jeon Jungkook</h6>
                                            <p class="text-xs text-secondary mb-0">jungkookjeon@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Logistic Manager</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Magister Program Studi Ilmu Komputer</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp30.000.000-Rp40.000.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://i.pinimg.com/736x/43/b4/3f/43b43f1309d921872741ed31a3676b0e.jpg" class="avatar avatar-sm me-3" alt="user2">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Jennie RubyJane</h6>
                                            <p class="text-xs text-secondary mb-0">janerubyjannie@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Assistent Manager</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Sarjana Program Studi Administrasi</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp15.600.000-Rp20.000.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://i.pinimg.com/736x/00/be/00/00be00254ace79bb8ae71c2cfdd52798.jpg" class="avatar avatar-sm me-3" alt="user3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Lalisa Manoban</h6>
                                            <p class="text-xs text-secondary mb-0">lalalallisa@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Direktur Keuangan</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Magister Program Studi Ekonomi Bisnis</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp25.000.000-Rp30.000.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="data:image/jpeg;base64,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" class="avatar avatar-sm me-3" alt="user4">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Mingyu Kim</h6>
                                            <p class="text-xs text-secondary mb-0">mingyukiming@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Programator Developer</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Sarjana Program Studi Sistem Informasi</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp30.000.000-Rp40.000.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://i.pinimg.com/originals/48/10/43/481043354589501c0e920df72eb9d7e9.jpg" class="avatar avatar-sm me-3" alt="user5">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Cha EunWoo</h6>
                                            <p class="text-xs text-secondary mb-0">eunwoochacha@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Manager Marketing</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Sarjana Program Studi Akuntansi</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp15.000.000-Rp20.000.000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="https://i.pinimg.com/736x/87/33/45/873345b3a53c69c070803064add5514c.jpg" class="avatar avatar-sm me-3" alt="user6">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Jaehyun Jeong</h6>
                                            <p class="text-xs text-secondary mb-0">jaehyunjeong97@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Programtor Developer</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Sarjana Program Studi Sistem Informasi</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">Rp30.000.000-Rp40.000.000</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection