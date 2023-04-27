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
                        @foreach ($data as $value)
                        <tr>
                            <td>{{ $value->jobname }}</td>
                            <td>{{ $value->city}}</td>
                            <td>{{ $value->salary }}</td>
                            <td>{{ $value->type }}</td>
                            <td>{{ $value->experience }}</td>
                            <td>{{ $value->remoteworking }}</td>
                            <td>{{ $value->desc }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <form action="/company/{{ $value->id }}" method="post">
                                        @method('put')
                                            @csrf
                                                    <input name="recruiter" class="form-control" type="text" value="{{ Auth::user()->name }}" hidden>
                                                    <input name="status" class="form-control" type="text" value="close" hidden>
                                                    <input name="jobname" class="form-control" type="text" placeholder="Job Position" value="{{ $value->jobname }}" hidden>
                                                    <select name="city" class="form-select" aria-label="Default select example" hidden>
                                                        <option disabled selected>Open this select menu</option>
                                                        <option value="jakarta" {{ $value->city =="jakarta" ? 'selected' : '' }}>Jakarta</option>
                                                        <option value="bandung" {{ $value->city =="bandung" ? 'selected' : '' }}>Bandung</option>
                                                        <option value="semarang" {{ $value->city =="semarang" ? 'selected' : '' }}>Semarang</option>
                                                        <option value="surabaya" {{ $value->city =="surabaya" ? 'selected' : '' }}>Surabaya</option>
                                                        <option value="malang" {{ $value->city =="malang" ? 'selected' : '' }}>Malang</option>
                                                        <option value="yogjakarta" {{ $value->city =="yogjakarta" ? 'selected' : '' }}>Yogjakarta</option>
                                                        <option value="tangerang" {{ $value->city =="tangerang" ? 'selected' : '' }}>Tangerang</option>
                                                        <option value="bogor" {{ $value->city =="bogor" ? 'selected' : '' }}>Bogor</option>
                                                        <option value="kawarang" {{ $value->city =="karawang" ? 'selected' : '' }}>Karawang</option>
                                                        <option value="madiun" {{ $value->city =="madiun" ? 'selected' : '' }}>Madiun</option>
                                                        <option value="depok" {{ $value->city =="depok" ? 'selected' : '' }}>Depok</option>
                                                        <option value="bekasi" {{ $value->city =="bekasi" ? 'selected' : '' }}>Bekasi</option>
                                                        <option value="solo" {{ $value->city =="solo" ? 'selected' : '' }}>Solo</option>
                                                    </select>
                                                    <input name="salary" class="form-control" type="text" placeholder="Salary" value="{{ $value->salary }}" hidden>
                                                    <select name="type" class="form-select" aria-label="Default select example" hidden>
                                                        <option disabled selected>Open this select menu</option>
                                                        <option value="internship" {{ $value->type =="internship" ? 'selected' : '' }}>Internship</option>
                                                        <option value="fulltime" {{ $value->type =="fulltime" ? 'selected' : '' }}>Full-time</option>
                                                        <option value="parttime" {{ $value->type =="parttime" ? 'selected' : '' }}>Part-time</option>
                                                        <option value="freelance" {{ $value->type =="freelance" ? 'selected' : '' }}>Freelance </option>
                                                    </select>
                                                    <select name="experience" class="form-select" aria-label="Default select example" hidden>
                                                        <option disabled selected>Open this select menu</option>
                                                        <option value="freshgraduate" {{ $value->experience =="solo" ? 'selected' : '' }}>Fresh Graduate</option>
                                                        <option value="1-3" {{ $value->experience =="1-3" ? 'selected' : '' }}>1 - 3 Years</option>
                                                        <option value="3-5" {{ $value->experience =="3-5" ? 'selected' : '' }}>3 - 5 Years </option>
                                                        <option value="5-10" {{ $value->experience =="5-10" ? 'selected' : '' }}>5 - 10 Years</option>
                                                        <option value="10up" {{ $value->experience =="10up" ? 'selected' : '' }}>More than 10 Years</option>
                                                    </select>
                                                    <input class="form-check-input" type="radio" name="remoteworking" value="yes" id="flexRadioDefault1" {{ $value->remoteworking =="yes" ? 'checked' : '' }} hidden>
                                                    <input class="form-check-input" type="radio" name="remoteworking" value="no" id="flexRadioDefault2" {{ $value->remoteworking =="no" ? 'checked' : '' }} hidden>
                                                    <textarea id="desc" type="textarea" class="form-control" name="desc" value="" placeholder="Job Description" hidden>{{ $value->desc }}</textarea>

                                        <input class="btn btn-success rounded-0" type="submit" name="submit" value="Close">
                                    </form>
                                    <a href="/company/{{ $value->id }}/edit">
                                        <button type="button" class="btn btn-warning rounded-0">Update</button>
                                    </a>
                                    <form action="/company/{{ $value->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" name="submit" class="btn btn-danger rounded-0" value="Delete">
                                    </form>
                                </div>
                            </td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>
        </div>

    </div>

</body>
</html>
