@extends('user.navbarfooter')
@section('body')
    <div style="width: 50%;" class="container-fluid">
        <center>
            <h3 class="mt-4">Search For Training<br>To Improve Your Skills</h3>
            <form action="/training" method="get">
                @method('get')
                <div class="row mt-4">
                <div class="col">
                  <input type="search" name="search" class="form-control" placeholder="Find Training" aria-label="Find Training">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Find</button>
                </div>
                </div>
            </form>

        </center>
    </div>
    <div class="container">
@foreach ($data as $d)
    <div class="container border border-1 rounded-4 w-75 p-3 mt-3 mb-3">
        <h5 class="fw-semibold">{{ $d->trainingname }}</h5>
        <h6>From : {{ $d->trainer }}</h6>
        <p>{{ $d->description }}</p>
<<<<<<< HEAD
<<<<<<< HEAD
        <a href="/detailtraining/{{ $d->id }}" class="btn btn-primary mt-2">See detail</a>
=======
        <form action="/detailtraining/{{ $d->id }}" method="get">
            <button class="btn btn-primary" type="submit">See Detail</button>
        </form>
>>>>>>> origin/Rafie
=======
        <form action="/detailtraining/{{ $d->id }}" method="get">
            <button class="btn btn-primary" type="submit">See Detail</button>
        </form>
>>>>>>> origin/sule
    </div>
    </div>
@endforeach
@endsection
