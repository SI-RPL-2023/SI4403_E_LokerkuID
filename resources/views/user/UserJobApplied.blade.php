<!DOCTYPE html>
<html>
<title>Home | {{ Auth::user()->name }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body>
    <!-- Page Content -->
    <div class="container">

        <div class="container-75 m-5">
            <h3 class="fw-semibold">Job Applied</h3>
            <div class="container border border-2 rounded-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Status</th>
                            <th scope="col">Interview Schedule</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value)
                        <tr>
                            <td>{{ $value->fullname }}</td>
                            <td>{{ $value->email}}</td>
                            <td>{{ $value->phone}}</td>
                            <td>{{ $value->address}}</td>
                            <td>{{ $value->status}}</td>
                            <td>{{ $value->interviewdate}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
                <a href="/home">
                    <button class="btn btn-secondary mb-3">Back</button>
                </a>
            </div>
        </div>

    </div>

</body>
</html>
