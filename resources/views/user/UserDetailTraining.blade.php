@extends('user.navbarfooter')
@section('body')
<div class="container w-75">

    <div class="container border border-1 rounded-4 w-75 p-3 mt-3 mb-3">
        <h5 class="fw-semibold">{{ $data->trainingname }}</h5>
        <h6>From : {{ $data->trainer }}</h6>
        <p>{{ $data->description }}</p>
        <form action="/user/detailtraining/{{  $data->id }}/apply" method="post">
            @csrf
            <input type="text" name="trainer" value="{{ $data->trainer }}" disabled hidden>
            <input type="text" name="trainingname" value="{{ $data->trainingname }}" disabled hidden>
            <input type="text" name="participants" value="{{ Auth::user()->name }}" disabled hidden>
            {{-- <a href="/detailtraining/{{ $data->id }}" class="btn btn-primary mt-2">Join Training</a> --}}
            <button  class="btn btn-primary mt-2" name="submit" type="submit">Join Training</button>
        </form>
    </div>

</div>
@endsection
