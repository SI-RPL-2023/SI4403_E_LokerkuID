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
                <a class="nav-link" href="findjob">Find a Job</a>
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
    <div style="width: 50%;" class="container-fluid">
        <center>
            <h3 class="mt-4">Search For Training<br>To Improve Your Skills</h3>
            <form class="row">
                <div class="row mt-4">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Search Training" aria-label="Training">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Find</button>
                    </div>
              </form>

        </center>
    </div>
    <div class="container">

        <div class="container border border-1 rounded-4 w-75 p-3">
            <h5 class="fw-semibold">Web Developer</h5>
            <h6>From : PT Multi Kontrol Nusantara</h6>
            <p>Train to be Full Stack Web Developer</p>
            <form action="" method="post">
                <button class="btn btn-primary" type="submit">See Detail</button>
            </form>
        </div>
        <div class="container border border-1 rounded-4 w-75 p-3 mt-3">
            <h5 class="fw-semibold">Backend Java Programmer</h5>
            <h6>From : PT Sarana Pactindo</h6>
            <p>Train to be Backend Java Programmer</p>
            <form action="" method="post">
                <button class="btn btn-primary" type="submit">See Detail</button>
            </form>
        </div>
        <div class="container border border-1 rounded-4 w-75 p-3 mt-3">
            <h5 class="fw-semibold">Content Creator</h5>
            <h6>From : Bengawan Jaya Abadi</h6>
            <p>Train to be profesional content crator</p>
            <form action="" method="post">
                <button class="btn btn-primary" type="submit">See Detail</button>
            </form>
        </div>
        <div class="container border border-1 rounded-4 w-75 p-3 mt-3 mb-3">
            <h5 class="fw-semibold">Marketing Executive</h5>
            <h6>From : Tatonas</h6>
            <p>Train to be Maketing Executive</p>
            <form action="" method="post">
                <button class="btn btn-primary" type="submit">See Detail</button>
            </form>
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
