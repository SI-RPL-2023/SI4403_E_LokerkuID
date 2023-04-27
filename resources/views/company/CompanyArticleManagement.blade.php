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
            <h3 class="text-light m-3">Article Management | {{ Auth::user()->name }}</h3>
        </div>
        <div class="container-75 m-5">
            <h3 class="fw-semibold">Your Article</h3>
            <div class="container border border-2 rounded-4">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Create At</th>
                        <th scope="col">Update At</th>
                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->title}}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>{{ $d->updated_at}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <form action="/company/articlemanagement/{{ $d->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger rounded-0" type="submit" value="Delete">
                                </form>
                            </div>

                        </td>
                    </tr>
                     @endforeach
                    </tbody>
                  </table>
            </div>
        </div>

</body>
</html>
