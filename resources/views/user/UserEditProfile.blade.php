@extends('user.navbarfooter')
@section('body')
    <div class="container">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Hallo, {{ Auth::user()->name }}</h5>
                        <div class="container mt-4">
                            <div class="d-flex justify-content-center">
                              <div class="rounded-circle overflow-hidden" style="width: 200px; height: 200px;">
                                <img src="path/to/your/image.jpg" alt="Profile Picture" style="width: 100%; height: 100%; object-fit: cover;">
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="card-body">
                        <form action="editprofile/{{ Auth::user()->id }}/edit" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter your Full Name" value="{{ Auth::user()->fullname }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="phone" placeholder="Enter your Phone Number " value="{{ Auth::user()->phone_number }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea class="form-control" name="bio" id="bio" rows="3" placeholder="Enter your bio" value="">{{ Auth::user()->bio }}</textarea>
                            </div>
                            <a href="profile"  class="btn btn-secondary">Cancel</a>
                            <input class="btn btn-primary" type="submit" name="submit" value="Update Profile">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
