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
        <a href="recruitment" class="w3-bar-item w3-button">Recruitment</a>
        <a href="reviewapplicants" class="w3-bar-item w3-button">Review Applicants</a>
        <a href="training" class="w3-bar-item w3-button">Training</a>
        <a href="trainingmanagement" class="w3-bar-item w3-button">Training Management</a>
        <a href="history" class="w3-bar-item w3-button">History</a>
        <a href="article" class="w3-bar-item w3-button">Write Article</a>
        <a href="articlemanagement" class="w3-bar-item w3-button">Article Management</a>
        <a href="profile" class="w3-bar-item w3-button">Profile</a>
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

    <div style="margin-left:15%">
        <div class="w3-container w3-gray">
            <h3 class="text-light m-3">Recruitment | {{ Auth::user()->name }}</h3>
        </div>
        <div class="w3-container">
            <form action="/company/storedata" method="post">
                @csrf
                <h3 class="text-center fw-semibold mt-3">Recruit Employe</h3>
                <div class="container w-50">
                    <div class="mb-3 mt-3">
                        <h6 class="text-start">Job Position</h6>
                        <input name="recruiter" class="form-control" type="text" value="{{ Auth::user()->name }}" hidden>
                        <input name="status" class="form-control" type="text" value="ongoing" hidden>
                        <input name="jobname" class="form-control" type="text" placeholder="Job Position">
                    </div>
                    <div class="mb-3 mt-3">
                        <h6 class="text-start">City</h6>
                        <select name="city" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
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
                    <div class="mb-3 mt-3">
                        <h6 class="text-start">Salary</h6>
                        <input name="salary" class="form-control" type="text" placeholder="Salary">
                    </div>
                    <div class="mb-3 mt-3">
                        <h6 class="text-start">Work Type</h6>
                        <select name="type" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="internship">Internship</option>
                            <option value="fulltime">Full-time</option>
                            <option value="parttime">Part-time</option>
                            <option value="freelance">Freelance </option>
                          </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <h6 class="text-start">Experience</h6>
                        <select name="experience" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="freshgraduate">Fresh Graduate</option>
                            <option value="1-3">1 - 3 Years</option>
                            <option value="3-5">3 - 5 Years </option>
                            <option value="5-10">5 - 10 Years</option>
                            <option value="10up">More than 10 Years</option>
                          </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <h6 class="text-start">Remote Working?</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="remoteworking" value="yes" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Yes
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="remoteworking" value="no" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              No
                            </label>
                          </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <h6 class="text-start">Description</h6>
                            <div class="">
                                <textarea id="desc" type="textarea" class="form-control" name="desc" value="" placeholder="Job Description"></textarea>
                            </div>
                          </select>
                    </div>
                    <input class="btn btn-primary" type="submit" name="save" value="Publish Recruitment">

                </div>
            </form>
        </div>

    </div>

</body>
</html>
