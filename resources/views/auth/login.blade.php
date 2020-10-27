@extends('layouts.auth')

@section('content')

      <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-4 mt-3">
                                    <a href="index.html">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="30"></span>
                                    </a>

                                </div>
                                <form action="{{ route('login') }}" method="post" class="p-2">
                                @csrf
                                    <div class="form-group">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" id="email" required="" placeholder="john@deo.com">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('password.request') }}" class="text-muted float-right">Forgot your password?</a>
                                        <label for="password">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-4 pb-3">
                                        <div class="custom-control custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Sign In </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        {{-- <div class="row mt-4">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p>
                            </div>
                        </div> --}}
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

@endsection
