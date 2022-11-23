@include('admin-layouts.header')
<div class="login-box">
    <!-- /.login-page -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{route('index')}}" class="h1"> <img src="/custom/assets/images/logo-2.png" height="50px"  alt="team meeting" class="img-logo"></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in </p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @error('email')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('password')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <button type="submit" class="btn btn-primary btn-block" styles="background-color:#f04f25;">Sign In</button>
                </div>
             </form>
             <p class="mb-1">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </p>
        </div>
    </div>
</div>
@include('admin-layouts.footer')