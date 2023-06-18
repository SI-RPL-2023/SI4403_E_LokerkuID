@extends('user.navbarfooter')
@section('body')
<div class="container">

    <div class="container-75 m-5">
        <h3 class="fw-semibold">Your Certificate</h3>
        <div class="container border border-2 rounded-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Training Name</th>
                        <th scope="col">From</th>
                        <th scope="col">Certificate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                    <tr>
                        <td>{{ $value->trainingname }}</td>
                        <td>{{ $value->trainer}}</td>
                        <td><button class="btn btn-primary px-4">
                            <i class="fas fa-download"></i>Download
                          </button>
                        </td>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection
