@extends('template/master-home')
@section('title','Register')
@section('body')
<main>
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 bg-gradient-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container pt-lg-md">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-secondary shadow border-0">
            {{-- <div class="card-header bg-white pb-5">
              <div class="text-muted text-center mb-3"><small>Sign up with</small></div>
              <div class="text-center">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon">
                    <img src="{{ asset('assets/img/icons/common/github.svg') }}" alt="image">
                  </span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon">
                    <img src="{{ asset('assets/img/icons/common/google.svg') }}" alt="image">
                  </span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div> --}}
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <big>Enter your credentials</big>
                @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
                      <div class="alert alert-danger" role="alert">
                        {{ $error }}
                      </div>
                    @endforeach
                @endif
              </div>
<<<<<<< HEAD
              <form action="/register/process" method="POST">
                {{csrf_field()}}
=======
              <form action="{{ url('/register/process') }}" method="POST">
                @csrf
>>>>>>> 8581eeff0bda031e871d0c6da1b2147558962fa3
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
<<<<<<< HEAD
                    <input class="form-control" placeholder="Name" type="text" name="name">
=======
                    <input class="form-control" type="text" name="name" placeholder="Fullname" value="{{old('name')}}">
>>>>>>> 8581eeff0bda031e871d0c6da1b2147558962fa3
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
<<<<<<< HEAD
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username">
=======
                      <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                    </div>
                    <input class="form-control" name="username" placeholder="Username" value="{{old('username')}}" type="text">
>>>>>>> 8581eeff0bda031e871d0c6da1b2147558962fa3
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
<<<<<<< HEAD
                    <input class="form-control" placeholder="Email" type="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
=======
                    <input class="form-control" name="email" placeholder="Email" value="{{old('email')}}" type="email">
>>>>>>> 8581eeff0bda031e871d0c6da1b2147558962fa3
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
<<<<<<< HEAD
                    <input class="form-control" placeholder="Phone" type="text" name="phone">
=======
                    <input class="form-control" name="password" placeholder="Password" value="{{old('username')}}" type="password">
>>>>>>> 8581eeff0bda031e871d0c6da1b2147558962fa3
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password_confirmation" placeholder="Confirmation Password" type="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="select-group select-group-alternative">
                    
                      <label for="">Choose account </label>
                      <select class="custom-select mr-sm-2" name="role">
                        
                        <option selected value="teacher">Teacher</option>
                        <option value="student">Student</option>
                    </select>
                  </div>
                </div>
                <div class="text-center">
<<<<<<< HEAD
                  <!-- <button type="button" class="btn btn-primary mt-4">Create account</button> -->
                  <input type="submit" class="btn btn-primary mt-4" value="Create account">
=======
                  <button type="submit" class="btn btn-primary mt-4" name="submit">Create account</button>
>>>>>>> 8581eeff0bda031e871d0c6da1b2147558962fa3
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection