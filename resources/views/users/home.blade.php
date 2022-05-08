@extends('includes.master')

@section('main-section')
    <div class="col-md-6 border-right">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List:</h3>
                <div class="card-tools mr-2">
                    <button data-toggle="modal" href="#modal-signup" type="button" class="btn btn-tool btn-primary">
                        <i class="fas fa-user-plus"></i>
                        Add user
                    </button>
                </div>
            </div>
            <!-- /.card-header -->

            <!-- users list -->

            <div class="list">
              <!-- user start -->
              <div class="list-row">
                <div class="card-body user p-3">
                  <div class="d-flex align-items-center">
                    <img src="assets/dist/img/logo.jpg" class="post-image">
                    <p class="post-poster">Name Here</p>

                    <div class="card-body float-right p-0">
                      <a href="{{ route('users.show', [1]) }}" class="btn btn-tool btn-primary float-right">view</a>
                    </div>
                  </div>


                </div>
              </div>
              <!-- user end -->

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
@endsection


