<!DOCTYPE html>
<html>
<title>Home | {{ Auth::user()->name }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>

<!-- Sidebar -->
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
        <img class="m-3" style="width: 180px;" src="{{ asset('assets/Logo LokerkuID.png') }}" alt="Logo LokerkuID" srcset="">
        <a href="home" class="w3-bar-item w3-button">Home</a>
        <a href="company/recruitment" class="w3-bar-item w3-button">Recruitment</a>
        <a href="company/reviewapplicants" class="w3-bar-item w3-button">Review Applicants</a>
        <a href="company/training" class="w3-bar-item w3-button">Training</a>
        <a href="company/trainingmanagement" class="w3-bar-item w3-button">Training Management</a>
        <a href="company/history" class="w3-bar-item w3-button">History</a>
        <a href="company/article" class="w3-bar-item w3-button">Write Article</a>
        <a href="company/articlemanagement" class="w3-bar-item w3-button">Article Management</a>
        <a href="company/profile" class="w3-bar-item w3-button">Profile</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">{{ Auth::user()->name }}</button>
            <div class="w3-dropdown-content w3-bar-block w3-border">
                <div class="w3-bar-item w3-button" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div style="margin-left:15%">
        <div class="w3-container w3-gray">
            <h3 class="text-light m-3">Home | {{ Auth::user()->name }}</h3>
        </div>
        <div class="container-75 m-5">
            <h3 class="fw-semibold">Ongoing Recruitment</h3>
            <div class="container border border-2 rounded-4">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Job Position</th>
                        <th scope="col">City</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Type</th>
                        <th scope="col">Experience</th>
                        <th scope="col">Remote Working</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Web Developer</td>
                        <td>Jakarta</td>
                        <td>6000000</td>
                        <td>Full-time</td>
                        <td>1 - 3 Years</td>
                        <td>No</td>
                        <td>Menguasai framework Laravel</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <form action="" method="post">
                                    <input name="recruiter" class="form-control" type="text" value="{{ Auth::user()->name }}" hidden>
                                    <input name="status" class="form-control" type="text" value="close" hidden>
                                    <input name="jobname" class="form-control" type="text" placeholder="Job Position" value="" hidden>
                                    <select name="city" class="form-select" aria-label="Default select example" hidden>
                                        <option disabled selected>Open this select menu</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="bandung">Bandung</option>
                                        <option value="semarang">Semarang</option>
                                        <option value="surabaya">Surabaya</option>
                                        <option value="malang">Malang</option>
                                        <option value="yogjakarta">Yogjakarta</option>
                                        <option value="tangerang">Tangerang</option>
                                        <option value="bogor" >Bogor</option>
                                        <option value="kawarang" >Karawang</option>
                                        <option value="madiun" >Madiun</option>
                                        <option value="depok" >Depok</option>
                                        <option value="bekasi" >Bekasi</option>
                                        <option value="solo" >Solo</option>
                                    </select>
                                    <input name="salary" class="form-control" type="text" placeholder="Salary" value="" hidden>
                                    <select name="type" class="form-select" aria-label="Default select example" hidden>
                                        <option disabled selected>Open this select menu</option>
                                        <option value="internship" >Internship</option>
                                        <option value="fulltime" >Full-time</option>
                                        <option value="parttime" >Part-time</option>
                                        <option value="freelance" >Freelance </option>
                                    </select>
                                    <select name="experience" class="form-select" aria-label="Default select example" hidden>
                                        <option disabled selected>Open this select menu</option>
                                        <option value="freshgraduate" >Fresh Graduate</option>
                                        <option value="1-3" >1 - 3 Years</option>
                                        <option value="3-5" >3 - 5 Years </option>
                                        <option value="5-10" >5 - 10 Years</option>
                                        <option value="10up" >More than 10 Years</option>
                                    </select>
                                                <input class="form-check-input" type="radio" name="remoteworking" value="yes" id="flexRadioDefault1"  hidden>
                                                <input class="form-check-input" type="radio" name="remoteworking" value="no" id="flexRadioDefault2"  hidden>
                                                <textarea id="desc" type="textarea" class="form-control" name="desc" value="" placeholder="Job Description" hidden></textarea>
                                            {{-- <input class="btn btn-primary" type="submit" name="submit" value="Edit Recruitment"> --}}

                                    <input class="btn btn-success rounded-0" type="submit" name="submit" value="Close">
                                </form>
                                    <a href="">
                                        <button type="button" class="btn btn-warning rounded-0">Update</button>
                                    </a>

                                <a href="company/home">
                                </a>
                              </div>
                            </td>
                    </tr>

                    </tbody>
                  </table>
            </div>
        </div>

    </div>

</body>
</html>
