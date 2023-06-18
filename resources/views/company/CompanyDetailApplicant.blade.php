<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
  </head>
  <body>
    <div class="container mt-5">
        <h3 class="fw-semibold">Training Name : {{ $data->trainingname }}</h3>
        <h5 class="fw-semibold">By : {{ $data->trainer }}</h5>
        <div class="container border border-2 rounded-4 mt-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Applicant</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Cover Letter</th>
                    <th scope="col">Resume</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">{{ $data->fullname }}</th>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->coverletter }}</td>
                    <td>{{ $data->resume }}</td>
                    <td>
                        <button class="btn btn-primary px-4">
                            <i class="fas fa-download"></i>Resume
                          </button>
                        <form action="acc" method="post">
                            @method("put")
                            @csrf
                            <input type="text" value="acc" name="status" hidden>
                            <button class="btn btn-success px-5 mt-1" name="submit" type="submit">Acc</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/company/reviewapplicants" class="btn btn-secondary m-3">Back</a>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
