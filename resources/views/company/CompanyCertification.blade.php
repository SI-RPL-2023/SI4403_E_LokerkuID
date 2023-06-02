<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Training</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                    <th scope="col">Certificate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">{{ $data->applicant }}</th>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>
                        <form action="postcertificate" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group mt-3">
                            <input type="file" class="form-control-file" id="certificate" name="certificate" required>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/company/trainingmanagement" class="btn btn-secondary m-3">Back</a>
        <button type="submit" class="btn btn-primary mt-3 mb-3">Send</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
