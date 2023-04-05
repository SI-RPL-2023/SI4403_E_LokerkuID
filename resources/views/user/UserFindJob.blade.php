@extends('user.navbarfooter')
@section('body')
      <div class="container">
        <form action="" method="post">
            <div class="row mt-4">
                <form action="/findjob" method="get">
                    @method('get')
                    <div class="col">
                      <input type="search" name="search" class="form-control" placeholder="Find Job" aria-label="Find Job">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Find</button>
                    </div>
                </form>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="border border-3 rounded-4 mb-3">
                            <h4 class="mt-3">Filter Your Search</h4>
                            <div class="cols-4 border border-1 rounded-2 mx-3">
                                <h5 class="mt-3">Near my location</h5>
                                <p>Find job near your location</p>
                                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Find</button>
                              </div>

                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Find By Location</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3 mt-3">
                                            <h6 class="text-start">Select Location</h6>
                                            <form action="/findjob" method="get">
                                            <select name="location" class="form-select" aria-label="Default select example">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="jakarta">Jakarta</option>
                                                <option value="bandung">Bandung</option>
                                                <option value="semarang">Semarang</option>
                                                <option value="surabaya">Surabaya</option>
                                                <option value="malang">Malang</option>
                                                <option value="yogjakarta">Yogjakarta</option>
                                                <option value="tangerang">Tangerang</option>
                                                <option value="bogor">Bogor</option>
                                                <option value="kawarang">Karawang</option>
                                                <option value="madiun">Madiun</option>
                                                <option value="depok">Depok</option>
                                                <option value="bekasi">Bekasi</option>
                                                <option value="solo">Solo</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Search</button>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>


                            <div class="cols-4 border border-1 rounded-2 mx-3 mt-3">
                                <h5 class="mt-3">Work Type</h5>
                                <div class="container text-start mx-4">
                                    <form action="/findjob" method="get">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type" value="internship" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Internship
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type" value="fulltime" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Full-time
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type" value="parttime" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          Part-time
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="type" value="freelance" id="flexCheckDefault">
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                          Freelance
                                        </label>
                                      </div>
                                      <button type="submit" class="btn btn-primary mb-3">Find</button>
                                    </form>
                                </div>
                            </div>
                            <div class="cols-4 border border-1 rounded-2 mx-3 mt-3 p-3 mb-3">
                                <div class="container text-start">
                                    <div class="form-check form-switch">
                                        <form action="/findjob" method="get">
                                            <input class="form-check-input" type="checkbox" name="remote" value="yes" role="switch" id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Remote Working</label><br>
                                            <button type="submit" class="btn btn-primary mt-3">Find</button>
                                        </form>
                                    </div>
                                </div>
                              </div>
                              <div class="cols-4 border border-1 rounded-2 mx-3 mt-3">
                                <h5 class="mt-3">Experience</h5>
                                <div class="container text-start mx-4">
                                    <form action="/findjob" method="get">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="experience" value="freshgraduate" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Less than one year
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="experience" value="1-3" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        1 - 3 Years
                                        </label>
                                      </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="experience" value="3-5" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        3 - 5 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="experience" value="5-10" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                         5 -10 Years
                                        </label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="experience" value="10up" id="flexCheckDefault">
                                        <label class="form-check-label mb-3" for="flexCheckDefault">
                                        More than 10 Years
                                        </label>
                                      </div>
                                      <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">Find</button>
                                    </div>
                                    </form>
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

                        </div>
                    </form>
                    </div>
                    <div class="col-sm-8">
                        <div class="container text-center">
                            <div class="row">
                                <div class="border border-2 rounded-4 p-3">
                                    <h4>Job Found</h4>
                                    <div class="row">
                                        @foreach ($job as $j)
                                        <div class="col-sm-6 mt-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title fw-semibold">{{ $j->jobname }}</h5>
                                                <h6>{{ $j->recruiter }}</h6>
                                                <div class="text-start">
                                                    <img style="height:20px; padding-right:10px;" src="{{ asset('assets/pin.png') }}" alt="">Location : {{ $j->city }}<br>
                                                    <img style="height:20px; padding-right:10px;" src="{{ asset('assets/dollar-symbol.png') }}" alt="">Salary : Rp {{ $j->salary }}/month<br>
                                                    <img style="height:20px; padding-right:10px;" src="{{ asset('assets/portfolio.png') }}" alt="">Experience : {{ $j->experience }}<br>
                                                    <img style="height:20px; padding-right:10px;" src="{{ asset('assets/worker.png') }}" alt="">Working Type : {{ $j->type }}<br>
                                                </div>
                                                <a href="jobdetail/{{ $j->id }}" class="btn btn-primary mt-2">See detail</a>
                                            </div>
                                        </div>
                                        </div>
                                        @endforeach
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
         @endsection
