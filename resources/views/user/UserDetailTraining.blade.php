@extends('user.navbarfooter')
@section('body')
<div class="container w-75">

    <div class="container border border-1 rounded-4 w-75 p-3 mt-3 mb-3">
        <h5 class="fw-semibold">{{ $data->trainingname }}</h5>
        <h6>From : {{ $data->trainer }}</h6>
        <p>{{ $data->description }}</p>
        <a href="/detailtraining/{{ $data->id }}" class="btn btn-primary mt-2">Join Training</a>
    </div>

</div>
@endsection
