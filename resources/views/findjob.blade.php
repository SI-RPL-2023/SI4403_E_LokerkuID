<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img style="width: 120px; margin-left:50px;" src="assets/Logo LokerkuID.png" alt="" srcset=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Find a Job</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="training">Training</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">About Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <form action="" method="post">
            <div class="row mt-4">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Find Job" aria-label="Find Job">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Location" aria-label="Location">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Find</button>
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="border border-3 rounded-4 mb-3">
                            <h4 class="mt-3">Filter Your Search</h4>
                            <div class="cols-4 border border-1 rounded-2 mx-3">
                                <h5 class="mt-3">Near my location</h5>
                                <p>Find job near your location</p>
                                <button type="submit" class="btn btn-primary mb-3">Find</button>
                              </div>
                            <div class="cols-4 border border-1 rounded-2 mx-3 mt-3">
                                <h5 class="mt-3">Work Type</h5>
                                <div class="container text-start mx-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Internship
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Full-time
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Part-time
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                          Freelance
                                        </label>
                                      </div>
                                </div>
                            </div>
                            <div class="cols-4 border border-1 rounded-2 mx-3 mt-3 p-3">
                                <div class="container text-start">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                      <label class="form-check-label" for="flexSwitchCheckDefault">Remote Working</label>
                                    </div>
                                </div>
                              </div>
                              <div class="cols-4 border border-1 rounded-2 mx-3 mt-3">
                                <h5 class="mt-3">Experience</h5>
                                <div class="container text-start mx-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Less than one year
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        1 - 3 Years
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        3 - 5 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                         5 -10 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                        More than 10 Years
                                        </label>
                                      </div>
                                </div>
                            </div>
                            {{-- <div class="cols-4 border border-1 rounded-2 mx-3 mt-3 mb-3">
                                <h5 class="mt-3">Job Category</h5>
                                <div class="container text-start mx-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Less than one year
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        1 - 3 Years
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        3 - 5 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                         5 -10 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                        More than 10 Years
                                        </label>
                                      </div>
                                </div>
                            </div> --}}
                            <div class="col-auto mt-3">
                                <button type="submit" class="btn btn-primary mb-3">Find</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-sm-8">
                        <div class="container text-center">
                            <div class="row">
                                <div class="border border-3 rounded-4 p-3">
                                    <h4>Job Found</h4>
                                    <div class="row mb-4">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                          <div class="card border border-1">
                                            <div class="card-body text-start mx-3">
                                              <h5 class="card-title fw-semibold">Business Analyst</h5>
                                              <h6>PT BSR INDONESIA</h6>
                                              <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Joglo, Jakarta<br>
                                              <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                                              <a href="#" class="btn btn-primary mt-2">See detail</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card border border-1">
                                                <div class="card-body text-start mx-3">
                                                  <h5 class="card-title fw-semibold">Ecommerce Specialist</h5>
                                                  <h6>PT Sumber Sinergi Makmur</h6>
                                                  <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Sawah Besar, Jakarta<br>
                                                  <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 5.000.000<br>
                                                  <a href="#" class="btn btn-primary mt-2">See detail</a>
                                                </div>
                                              </div>
                                        </div>
                                      </div>
                                      <div class="row mb-4">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card border border-1">
                                              <div class="card-body text-start mx-3">
                                                <h5 class="card-title fw-semibold">Sales Manager Advertising</h5>
                                                <h6>Ubiklan</h6>
                                                <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Cengkareng, Jakarta Barat<br>
                                                <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                                                <a href="#" class="btn btn-primary mt-2">See detail</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div class="card border border-1">
                                                  <div class="card-body text-start mx-3">
                                                    <h5 class="card-title fw-semibold">Sales Executive</h5>
                                                    <h6>PT Cartrack Technologies Indonesia</h6>
                                                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Barat<br>
                                                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                                                    <a href="#" class="btn btn-primary mt-2">See detail</a>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="row mb-4">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card border border-1">
                                              <div class="card-body text-start mx-3">
                                                <h5 class="card-title fw-semibold">PHP Programmer</h5>
                                                <h6>PT Cakra Tekno Nusantara</h6>
                                                <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Selatan<br>
                                                <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">The company does not display salary<br>
                                                <a href="#" class="btn btn-primary mt-2">See detail</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div class="card border border-1">
                                                  <div class="card-body text-start mx-3">
                                                    <h5 class="card-title fw-semibold">Web Programmer</h5>
                                                    <h6>PT Floo Integra Digital</h6>
                                                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Sidoarjo<br>
                                                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 7.000.000<br>
                                                    <a href="#" class="btn btn-primary mt-2">See detail</a>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="row mb-4">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <div class="card border border-1">
                                              <div class="card-body text-start mx-3">
                                                <h5 class="card-title fw-semibold">Franchise Manager</h5>
                                                <h6>PT Nuvens Prima Retail</h6>
                                                <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Jakarta Barat<br>
                                                <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 8.000.000<br>
                                                <a href="#" class="btn btn-primary mt-2">See detail</a>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                              <div class="card border border-1">
                                                  <div class="card-body text-start mx-3">
                                                    <h5 class="card-title fw-semibold">Content Creator</h5>
                                                    <h6>Bengawan Jaya Abadi</h6>
                                                    <img style="height:20px; padding-right:10px;" src="assets/pin.png" alt="">Sukoharjo<br>
                                                    <img style="height:20px; padding-right:10px;" src="assets/dollar-symbol.png" alt="">Rp 3.000.000<br>
                                                    <a href="#" class="btn btn-primary mt-2">See detail</a>
                                                  </div>
                                                </div>
                                          </div>
                                      </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

      </div>
          <footer>
            <div class="container-fluid-100" style="background-color: rgb(96, 96, 96);">
              <div class="container text-center">
                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
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
                    <img style="width: 300px; margin-top:60px;" src="assets/Logo LokerkuID putih.png" alt="">
                    <h6 class="text-white">Copyright 2022</h6>
                  </div>
          </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
