<!DOCTYPE html>
<html>
<title>Home | {{ Auth::user()->name }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
    <div class="w3-container">
        <form action="/company/{{ $data->id }}/update" method="post">
            @method('put')
            @csrf
            <h3 class="text-center fw-semibold mt-3">Recruit Employe</h3>
            <div class="container w-50">
                <div class="mb-3 mt-3">
                    <h6 class="text-start">Job Position</h6>
                    <input name="recruiter" class="form-control" type="text" value="{{ Auth::user()->name }}" hidden>
                    <input name="status" class="form-control" type="text" value="ongoing" hidden>
                    <input name="jobname" class="form-control" type="text" placeholder="Job Position" value="{{ $data->jobname }}">
                </div>
                <div class="mb-3 mt-3">
                    <h6 class="text-start">City</h6>
                    <select name="city" class="form-select" aria-label="Default select example">
                        <option disabled selected>Open this select menu</option>
                        <option value="jakarta" {{ $data->city =="jakarta" ? 'selected' : '' }}>Jakarta</option>
                        <option value="bandung" {{ $data->city =="bandung" ? 'selected' : '' }}>Bandung</option>
                        <option value="semarang" {{ $data->city =="semarang" ? 'selected' : '' }}>Semarang</option>
                        <option value="surabaya" {{ $data->city =="surabaya" ? 'selected' : '' }}>Surabaya</option>
                        <option value="malang" {{ $data->city =="malang" ? 'selected' : '' }}>Malang</option>
                        <option value="yogjakarta" {{ $data->city =="yogjakarta" ? 'selected' : '' }}>Yogjakarta</option>
                        <option value="tangerang" {{ $data->city =="tangerang" ? 'selected' : '' }}>Tangerang</option>
                        <option value="bogor" {{ $data->city =="bogor" ? 'selected' : '' }}>Bogor</option>
                        <option value="kawarang" {{ $data->city =="karawang" ? 'selected' : '' }}>Karawang</option>
                        <option value="madiun" {{ $data->city =="madiun" ? 'selected' : '' }}>Madiun</option>
                        <option value="depok" {{ $data->city =="depok" ? 'selected' : '' }}>Depok</option>
                        <option value="bekasi" {{ $data->city =="bekasi" ? 'selected' : '' }}>Bekasi</option>
                        <option value="solo" {{ $data->city =="solo" ? 'selected' : '' }}>Solo</option>
                        </select>
                </div>
                <div class="mb-3 mt-3">
                    <h6 class="text-start">Salary</h6>
                    <input name="salary" class="form-control" type="text" placeholder="Salary" value="{{ $data->salary }}">
                </div>
                <div class="mb-3 mt-3">
                    <h6 class="text-start">Work Type</h6>
                    <select name="type" class="form-select" aria-label="Default select example">
                        <option disabled selected>Open this select menu</option>
                        <option value="internship" {{ $data->type =="internship" ? 'selected' : '' }}>Internship</option>
                        <option value="fulltime" {{ $data->type =="fulltime" ? 'selected' : '' }}>Full-time</option>
                        <option value="parttime" {{ $data->type =="parttime" ? 'selected' : '' }}>Part-time</option>
                        <option value="freelance" {{ $data->type =="freelance" ? 'selected' : '' }}>Freelance </option>
                        </select>
                </div>
                <div class="mb-3 mt-3">
                    <h6 class="text-start">Experience</h6>
                    <select name="experience" class="form-select" aria-label="Default select example">
                        <option disabled selected>Open this select menu</option>
                        <option value="freshgraduate" {{ $data->experience =="solo" ? 'selected' : '' }}>Fresh Graduate</option>
                        <option value="1-3" {{ $data->experience =="1-3" ? 'selected' : '' }}>1 - 3 Years</option>
                        <option value="3-5" {{ $data->experience =="3-5" ? 'selected' : '' }}>3 - 5 Years </option>
                        <option value="5-10" {{ $data->experience =="5-10" ? 'selected' : '' }}>5 - 10 Years</option>
                        <option value="10up" {{ $data->experience =="10up" ? 'selected' : '' }}>More than 10 Years</option>
                        </select>
                </div>
                <div class="mb-3 mt-3">
                    <h6 class="text-start">Remote Working?</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="remoteworking" value="yes" id="flexRadioDefault1" {{ $data->remoteworking =="yes" ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault1" >
                            Yes
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="remoteworking" value="no" id="flexRadioDefault2" {{ $data->remoteworking =="no" ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            No
                        </label>
                        </div>
                </div>



                <div class="mb-3 mt-3">
                    <h6 class="text-start">Description</h6>
                        <div class="">
                            <textarea id="desc" type="textarea" class="form-control" name="desc" value="" placeholder="Job Description">{{ $data->desc }}</textarea>
                        </div>
                        </select>
                </div>
                <a style="text-decoration: none;" href="/company">
                    <button class="btn btn-secondary">Back</button>
                </a>
                <input class="btn btn-primary" type="submit" name="submit" value="Edit Recruitment">
            </div>
        </form>
    </div>
</body>
</html>
