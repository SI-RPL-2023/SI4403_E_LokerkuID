@extends('user.navbarfooter')
@section('body')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="container mt-4">
                            <div class="d-flex justify-content-center">
                                <div class="rounded-circle overflow-hidden" style="width: 200px; height: 200px;">
                                    <img src="{{ asset("assets/meja.jpg") }}" alt="Profile Picture" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <center><h5 class="card-title mt-3">Hallo, {{ Auth::user()->name }}</h5></center>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name" value="{{ Auth::user()->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Enter your Full Name" value="{{ Auth::user()->fullname }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter your Phone Number " value="{{ Auth::user()->phone_number }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" id="bio" rows="3" placeholder="Enter your bio" value="" disabled>{{ Auth::user()->bio }}</textarea>
                            </div>
                            <a href="/home"  class="btn btn-secondary">Back</a>
                            <a href="/user/editprofile"  class="btn btn-primary">Edit</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
