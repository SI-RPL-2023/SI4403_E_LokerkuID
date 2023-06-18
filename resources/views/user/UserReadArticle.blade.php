@extends('user.navbarfooter')
@section('body')

<div class="container w-75 mt-5">
    <h1>{{ $data->title }}</h1>
    <P style="color: grey;">Date Post: {{ Illuminate\Support\Str::limit($data->created_at, 11,'') }}</P><br><br>

    {!! $data->description !!}

    <a href="/article">
    <button class="btn btn-secondary mb-3">Back</button>
    </a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection
