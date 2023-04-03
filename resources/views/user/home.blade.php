@extends('user.navbarfooter')
@section('body')
      <img style="width: 100%; filter: brightness(50%);" src="assets/meja.jpg" alt="">
      <div class="container">
        <h1 style="margin-top:-70px;" class="position-absolute top-50 start-50 translate-middle fw-bolder text-light">Find a job</h1>
        <h6 style="margin-top:-40px;" class="position-absolute top-50 start-50 translate-middle-x text-light">Find your dream job at LokerkuID</h6>
        <div class="container">
        <form action="/findjob" method="get">
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
    @endsection
