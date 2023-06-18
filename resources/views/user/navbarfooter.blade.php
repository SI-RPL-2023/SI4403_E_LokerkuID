<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LokerkuID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#notifModal" width="16" height="16" fill="currentColor" class="bi bi-bell mt-3 mr-4" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                    </svg>
                    <div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Notification</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="user/profile">Profile</a>
                            <a class="dropdown-item" href="user/jobapplied">Job Applied</a>
                            <a class="dropdown-item" href="user/certificate">My Certificate</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            </div>
          </div>
        </div>
      </nav>

      @yield('body')

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
            </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
