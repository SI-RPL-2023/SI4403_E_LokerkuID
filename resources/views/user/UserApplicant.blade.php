@extends('user.navbarfooter')
@section('body')
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center mb-4">Form Apply Pekerjaan</h2>
                <form action="storedata" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="fullname">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone">Telepon</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="address">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="resume">Resume</label>
                        <input type="file" class="form-control-file" id="resume" name="resume" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="coverletter">Cover Letter</label>
                        <textarea class="form-control" id="coverletter" name="coverletter" rows="3"></textarea>
                    </div>
                    <input type="text" class="form-control" id="jobID" name="jobID" value="{{ $data->id }}" hidden>
                    <input type="text" class="form-control" id="jobID" name="status" value="waiting" hidden>
                    <button type="submit" class="btn btn-primary mt-3 mb-3">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>

@endsection
