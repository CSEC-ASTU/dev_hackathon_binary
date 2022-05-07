<div class="col-md-3 mt-5">
    <img src="" alt="">
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="card-title">New here?</h3>
        </div>
        <div class="card-body">
            <p>Sign up now to get your own personalized timeline!</p>
            <div class="social-auth-links text-center mt-2 mb-3">
                <a data-toggle="modal" href="#modal-signin" class="btn btn-block btn-primary">
                    <i class="fas fa-sign-in-alt mr-2"></i> Sign in
                </a>
                <a data-toggle="modal" href="#modal-signup" class="btn btn-block btn-danger">
                    <i class="fas fa-user-plus mr-2"></i> Sign up
                </a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-signin">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <div class="login-box">
                    <div class="card-header text-center">
                        <a class="h1"><b>CSEC</b> ASTU</a>
                    </div>
                    <div class="card-body">
                        @if (Session::get('login-error'))
                            <div class="alert alert-danger alert-dismissible">
                                <i class="icon fas fa-ban"></i> {{ Session::get('login-error') }}
                            </div>
                        @endif
                        
                        <p class="login-box-msg">Sign in to start your session</p>
                        <form action="{{ route('account.login') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control  @error('username') {{ 'is-invalid' }} @enderror " name="username" placeholder="username" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>                               
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control @error('password') {{ 'is-invalid' }} @enderror "name="password" placeholder="Password" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-sign-in-alt mr-2"></i>
                                        Sign in
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-signup">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <div class="login-box">
                    <div class="card-header text-center">
                        <a class="h1"><b>CSEC</b> ASTU</a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg">Sign up to be part of...</p>
                        <form action=" {{ route('account.register')}}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('new_username') {{ 'is-invalid' }} @enderror" name="new_username" placeholder="username" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control @error('new_email') {{ 'is-invalid' }} @enderror" name="new_email" placeholder="email" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control @error('new_password') {{ 'is-invalid' }} @enderror" name="new_password" placeholder="Password" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control @error('new_password_confirmation') {{ 'is-invalid' }} @enderror" name="new_password_confirmation" placeholder="confirm Password" />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-user-plus mr-2"></i>
                                        Sign up
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
