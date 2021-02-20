@extends('admin.auth.app')

@section('title')
    Login
@endsection

@section('meta')
@endsection

@section('styles')
@endsection

@section('content')
    <form action="{{ route('admin.signin') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="row justify-content-md-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-screen">
                    <div class="login-box">
                        <a href="{{ route('admin.dashboard') }}" class="login-logo">
                            <img src="{{ _site_logo_1() }}" alt="Wowdeals" />
                        </a>
                        <h5>Welcome back to ,<br />Please Login to your Account.</h5>
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('status')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email Address" />
                            @error('email')
                                <div class="invalid-feedback" style="display: block;">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                            @error('password')
                                <div class="invalid-feedback" style="display: block;">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="actions mb-4">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
@endsection