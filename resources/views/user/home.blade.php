<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LokerkuID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img style="width: 120px; margin-left:50px;" src="{{ asset('assets/Logo LokerkuID.png') }}" alt="" srcset=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="findjob">Find a Job</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="training">Training</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
              </li>
            </ul>
          </div>
          <div style="width: 300px;" class="container text-end">
              <ul class="navbar-nav ms-auto">
            </ul>
            </div>
          </div>
        </div>
      </nav>

      <img style="width: 100%; filter: brightness(50%);" src="assets/meja.jpg" alt="">
      <div class="container">
        <h1 style="margin-top:-70px;" class="position-absolute top-50 start-50 translate-middle fw-bolder text-light">Find a job</h1>
        <h6 style="margin-top:-40px;" class="position-absolute top-50 start-50 translate-middle-x text-light">Find your dream job at LokerkuID</h6>
        <div class="container">
        <form action="/findjob" method="get">
            @method('get')
            <div class="container">
              <input style="margin-top: 10px; width:30%; background-color:rgba(255, 255, 255, 0.553) !important; border:2px !important; border-style:solid !important; border-color:white !important;"
              name="search" type="text" class="form-control position-absolute top-50 start-50 translate-middle" placeholder="Find a job">
              <button style="margin-top: 40px;" type="submit" class="btn btn-outline-light position-absolute top-50 start-50 translate-middle-x">Find</button>
            </div>
        </form>
          </form>
        </div>
      </div>
    </div>
      <div class="container">
        <h3 class="mt-4 mb-3 text-center fw-semibold">Suggestion Job</h3>
        <div class="row mb-4"><div class="row mb-4">
            <div class="col-sm-6 mb-3 mb-sm-0 mt-3">
                <div class="card border border-1">
                  <div class="card-body text-start mx-3">
                    <h5 class="card-title fw-semibold">Web Developer</h5>
                    <h6>PT Multi Kontrol Nusantara</h6>
                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Selatan<br>
                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 5000000/month<br>
                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                  </div>
                </div>
              </div>
            <div class="col-sm-6 mb-3 mb-sm-0 mt-3">
                <div class="card border border-1">
                  <div class="card-body text-start mx-3">
                    <h5 class="card-title fw-semibold">Data Analyst</h5>
                    <h6>PT Gojek Indonesia</h6>
                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Selatan<br>
                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 8000000/month<br>
                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                  </div>
                </div>
              </div>
            <div class="col-sm-6 mb-3 mb-sm-0 mt-3">
                <div class="card border border-1">
                  <div class="card-body text-start mx-3">
                    <h5 class="card-title fw-semibold">Project Manager</h5>
                    <h6>PT Wijaya Karya</h6>
                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Timur<br>
                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 10000000/month<br>
                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                  </div>
                </div>
              </div>
            <div class="col-sm-6 mb-3 mb-sm-0 mt-3">
                <div class="card border border-1">
                  <div class="card-body text-start mx-3">
                    <h5 class="card-title fw-semibold">System Analyst</h5>
                    <h6>PT Tokopedia</h6>
                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Selatan<br>
                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 9000000/month<br>
                    <a href="jobdetail" class="btn btn-primary mt-2">See detail</a>
                  </div>
                </div>
              </div>
            </div>
            <center>
                <a href="/findjob">
                    <button class="submit btn btn-primary">See More</button>
                </a>
            </center>

            <div class="container-fluid">
                <h3 class="mt-4 mb-3 text-center fw-semibold">Job Category</h3>
                <div class="container text-center">
                    <center>
                    <div style="width: 70%;" class="row align-items-start text-start mb-5 border border-2 rounded-2 p-3">
                      <div class="col">
                        <a href='' style='text-decoration:none;'>Administrasi</a><br>
                        <a href='' style='text-decoration:none;'>Akuntansi dan Keuangan</a><br>
                        <a href='' style='text-decoration:none;'>Customer Care</a><br>
                        <a href='' style='text-decoration:none;'>Hospitality & Travel</a><br>
                        <a href='' style='text-decoration:none;'>Human Resource</a><br>
                        <a href='' style='text-decoration:none;'>Kecantikan</a><br>
                        <a href='' style='text-decoration:none;'>Management Consulting</a><br>
                        <a href='' style='text-decoration:none;'>Pelayanan Profesional</a><br>
                        <a href='' style='text-decoration:none;'>Perbankan</a><br>
                        <a href='' style='text-decoration:none;'>Property & Real Estate</a><br>
                        <a href='' style='text-decoration:none;'>Restaurant</a><br>
                        <a href='' style='text-decoration:none;'>Telekomunikasi</a><br>
                      </div>
                      <div class="col">
                        <a href='' style='text-decoration:none;'>Advertising & Public Relations</a><br>
                        <a href='' style='text-decoration:none;'>Asuransi</a><br>
                        <a href='' style='text-decoration:none;'>Desain</a><br>
                        <a href='' style='text-decoration:none;'>Hotel</a><br>
                        <a href='' style='text-decoration:none;'>Information Technology</a><br>
                        <a href='' style='text-decoration:none;'>Kesehatan dan Kedokteran</a><br>
                        <a href='' style='text-decoration:none;'>Pabrik dan Manufaktur</a><br>
                        <a href='' style='text-decoration:none;'>Pendidikan Dan Pelatihan</a><br>
                        <a href='' style='text-decoration:none;'>Pertambangan Dan Energi</a><br>
                        <a href='' style='text-decoration:none;'>Purchasing / Pembelian</a><br>
                        <a href='' style='text-decoration:none;'>Retail</a><br>
                        <a href='' style='text-decoration:none;'>Transportasi & Logistik</a><br>
                      </div>
                      <div class="col">
                        <a href='' style='text-decoration:none;'>Agrikultur</a><br>
                        <a href='' style='text-decoration:none;'>Automotive</a><br>
                        <a href='' style='text-decoration:none;'>Event</a><br>
                        <a href='' style='text-decoration:none;'>Hukum & Keamanan</a><br>
                        <a href='' style='text-decoration:none;'>Internet & New Media</a><br>
                        <a href='' style='text-decoration:none;'>Konstruksi dan Bangunan</a><br>
                        <a href='' style='text-decoration:none;'>Pekerjaan Umum</a><br>
                        <a href='' style='text-decoration:none;'>Penjualan / Pemasaran</a><br>
                        <a href='' style='text-decoration:none;'>Programmer</a><br>
                        <a href='' style='text-decoration:none;'>Research & Development</a><br>
                        <a href='' style='text-decoration:none;'>Teknik</a><br>
                      </div>
                    </div>
                </center>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-100 p-2" style="background-color: rgb(243, 243, 243);">
        <h3 class="fw-semibold text-center">You Have a Company?</h3>
        <div class="container w-50">
            <p style="text-align: center;">Hey!, you hava a company?. Try registering your company at LokerkuID, here you can expand your search for professional workers. join us and grow together!</p>
            <a href="compregist">
                <center>
                    <button class="btn btn-primary mb-2">
                        Register
                    </button>
                </center>
            </a>
        </div>
    </div>
    <footer>
        <div class="container-fluid-100" style="background-color: rgb(96, 96, 96);">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-6">
                <h2 class="mt-5 text-white">
                  Contact Us
                </h2>
                <p class="text-white">
                  <img style="width: 20px; margin-right: 10px; align-items: flex-start;" src="assets/location-pin.png">
                  Jl. Puri Kembangan 21, RT.6/RW.5, Kembangan Sel., Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11610
                </p>
                <p class="text-white">
                  <img style="width: 20px; margin-right: 10px;" src="assets/phone-call.png" alt="">
                  085156778777
                </p>
                <p class="text-white">
                  <img style="width: 20px; margin-right: 10px;" src="assets/email.png" alt="">
                  admin@lokerkuid.com
                </p>
              </div>
              <div style="margin-left:150px;" class="col-8 col-md-4">
                <img style="width: 300px; margin-top:60px;" src="{{ asset('assets/Logo LokerkuID putih.png') }}" alt="">
                <h6 class="text-white">Copyright 2022</h6>
              </div>
      </footer>
    </body>
</html>
