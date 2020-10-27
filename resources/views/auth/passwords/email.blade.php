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
                                <div class="text-center">
                                    <p class="text-muted w-75 mx-auto"> Enter your email address and we'll send you an email with instructions to reset your password. </p>
                                </div>
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form action="{{ route('password.email') }}" method="post" class="p-2">
                                @csrf
                                    <div class="form-group">
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Reset Password </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="row mt-4">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted mb-0">Back to <a href="{{ route('login') }}" class="text-dark ml-1"><b>Sign In</b></a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
</div>
@endsection
