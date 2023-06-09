@extends ('layouts.admin')
@section ('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">User / Add</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ ('login') }}">Home</a></li>
                    <li class="breadcrumb-item active">User / Add</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="col-md-12">

    <div class="card card-primary">

        <div class="card-header">
            <h3 class="card-title">Form Add</h3>
        </div>
        <!-- /.card-header -->


        <!-- form start -->
        <form action="{{ ('user') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="card-body">
                <div class="text-center">

                    @if (session('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> {{ session('success') }}
                    </div>
                    @endif



                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/L-logo.jpg') }}" alt="User profile picture">
                </div>

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" name="first_name">
                    @error('first_name')
                    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" name="last_name">
                    @error('last_name')
                    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" name="email">
                    @error('email')
                    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                    @error('password')
                    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="retype_password">Retype password</label>
                    <input type="password" id="retype_password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="retype_password" name="password_confirmation">
                    @error('password_confirmation')
                    <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>


         


                <div class="form-group">
                    <label for="File">File picture input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="user_image" name="user_image">
                            <label class="custom-file-label" for="user_image">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check" placeholder="check" name="check">
                    <label class="form-check-label" for="check">Check me out</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@stop