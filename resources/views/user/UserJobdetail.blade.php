@extends('user.navbarfooter')
@section('body')
<div class="container w-75">
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <div style="height: 330px;" class="card-body text-center mt-5 border border-1 rounded-2 mb-5">
                <h5 class="card-title fw-semibold mt-3">{{ $data->jobname }}</h5>
                <h6>{{ $data->recruiter }}</h6>
                <div class="container text-start mx-5 mt-3">
                <img style="height:20px; padding-right:10px;" src="{{ asset('assets/pin.png') }}" alt="">Location : {{ $data->city }}<br>
                <img style="height:20px; padding-right:10px;" src="{{ asset('assets/dollar-symbol.png') }}" alt="">Salary : Rp {{ $data->salary }}/month<br>
                <img style="height:20px; padding-right:10px;" src="{{ asset('assets/portfolio.png') }}" alt="">Experience : {{ $data->experience }}<br>
                <img style="height:20px; padding-right:10px;" src="{{ asset('assets/worker.png') }}" alt="">Working Type : {{ $data->type }}<br>
                <h6 class="mt-3">Job Description : </h6>
                <p>{{ $data->desc }}</p>
                </div>
                <a href="applyjob/{{ $data->id }}">
                    <button class="btn btn-primary mb-3">Apply Job</button>
                </a>
              </div>
          </div>
          <div class="col">
            <div style="height: 330px;" class="card-body text-center mt-5 border border-1 rounded-2 mb-5">
                <h5 class="card-title fw-semibold mt-3">Hubungi Perusahaan</h5>
                <div class="container text-start mx-5 mt-3">
                    <h6>Nama : {{ $data->recruiter }}</h6>
                    <p>Company Location : {{ $data->city }}</p>

                </div>
                <a href="lokerkuid@lokerku.id"><button class="btn btn-primary mb-3">Contact Company</button></a>

              </div>
          </div>
          </div>
        </div>
      </div>

</div>
@endsection
