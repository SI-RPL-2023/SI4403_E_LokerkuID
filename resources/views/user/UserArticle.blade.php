@extends('user.navbarfooter')
@section('body')
    </div>
      <div class="container">
        <h1 class="mt-5 mb-3 text-center fw-semibold">Article</h1>
        <div style="width: 50%;" class="container-fluid">
            <center>
                <h4 class="mt-4">Search and Read Article<br>To Increase Your Knowledge<br>About the Job</h4>
                <form action="/article" method="get">
                    @method('get')
                    <div class="row mt-4">
                    <div class="col">
                      <input type="search" name="search" class="form-control" placeholder="Find Article" aria-label="Find Article">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Find</button>
                    </div>
                    </div>
                </form>

            </center>
        </div>
        <div class="container w-75 mb-3">
        <div class="row">
        @foreach ($article as $a)
            <div class="col-sm-6 mt-3">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title fw-semibold">{{ $a->title }}</h4>
                    <h6>From : {{ $a->publisher }}</h6>
                    <P style="color: grey;">Date Post: {{ Illuminate\Support\Str::limit($a->created_at, 11,'') }}</P><br>
                    {{-- <p>{{ Illuminate\Support\Str::limit($a->description, 20) }}</p><br> --}}
                    <a href="/readarticle/{{ $a->id }}" class="btn btn-primary mt-2 position-absolute bottom-0 start-0 mb-2 mx-3">Read More</a>
                </div>
              </div>
            </div>
        @endforeach





        </div>

            </center>
              </div>
          </div>
      </div>
        @endsection
