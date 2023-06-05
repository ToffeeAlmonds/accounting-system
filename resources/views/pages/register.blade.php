@extends ('layouts.index')

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>L</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        @if (session('success'))
        <div class="alert alert-success">
          <strong>Success!</strong> {{ session('success') }}
        </div>
        @endif

        <form action="{{('submit-register')}}" method="post">

          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" name="first_name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('first_name')
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" name="last_name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('last_name')
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="input-group mb-3">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="input-group mb-3">
            <input type="password" id="retype_password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Retype password" name="password_confirmation">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password_confirmation')
            <span id="exampleInputPassword1-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror

          </div>

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
      </div>
      </form>


   



      <a href="{{('login')}}" class="text-center">I already have a account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
  </div>
  <!-- /.register-box -->