<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header text-center">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    </br> <span class="ms-1 font-weight-bold center">Sistem Informasi </br> Kepegawaian</span>
  </div>

  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="{{url('/home')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Home</span>
        </a>
      </li>

  <li class="nav-item">
    <a class="nav-link " href="{{url('/pegawai')}}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Kepegawaian</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{url('/jabatan')}}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Master Jabatan</span>
    </a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{url('/pendidikan')}}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Pendidikan</span>
    </a>
  </li>
  <li class="nav-item mt-3">
    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{url('/profil')}}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
      </div>
      <span class="nav-link-text ms-1">Profil</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="{{url('/logout')}}">
      <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
      <i class="fas fa-key opacity-6 text-dark me-1"></i>
      </div>
      <span class="nav-link-text ms-1">Log Out</span>
    </a>
  </li>
  </ul>
  </div>
</aside>