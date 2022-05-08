@extends('includes.master')

@section('main-section')
    <div class="col-md-6 border-right">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            <a class="fas fa-arrow-left" href="{{ route('users.home') }}"></a>
                            User
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header text-white" style="
                    background: url('https://picsum.photos/2000/1320') center center;
                    height: 270px;
                  ">
                <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                <h5 class="widget-user-desc text-right">Web Designer</h5>
            </div>
            <div class="widget-user-image" style="top: 215px">
                <img class="img-circle" src="assets/dist/img/logo.jpg" alt="User Avatar" />
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">0912345678</h5>
                            <span class="description-text">PHONE</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">UGR/12345/10</h5>
                            <span class="description-text">ID</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">45</h5>
                            <span class="description-text">LIKES</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>

        <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#activity" data-toggle="tab">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                    </li>
                </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="post" style="position: relative">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg"
                                    alt="User Image" />
                                <span class="username">
                                    <a href="#" onmouseover="hoverDiv(this)" onmouseleave="mouseLeave(this)">Adam Jones</a>
                                </span>
                                <span class="description">Posted 5 photos - 5 days ago</span>
                            </div>

                            <div class="popup-account d-none">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/dist/img/logo.jpg" class="post-image" />
                                        <p style="font-weight: bold">Name Here</p>
                                        <p style="font-weight: lighter">
                                            description about the "Name Here"
                                        </p>

                                        <p style="margin-top: 30px; font-weight: bold">
                                            100 Members
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.user-block -->
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="assets/dist/img/logo.jpg" alt="Photo" />
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="assets/dist/img/logo.jpg" alt="Photo" />
                                </div>

                                <div class="card d-flex flex-column align-items-center">
                                    <div class="card-header w-75 d-flex justify-content-center">
                                        <!-- image is found on the meta of the page -->
                                        <img src="https://www.facebook.com/images/fb_icon_325x325.png"
                                            style="max-width: 540px !important;">
                                    </div>
                                    <div class="card-footer">
                                        <!-- url of the page -->
                                        <p class="post-link text-light">facebook.com</p>
                                        <!-- site name of the page -->
                                        <p class="text-bold">Facebook</p>
                                        <!-- description of the page. -->
                                        <p class="">Log into Facebook to start sharing and connecting with
                                            your friends, family, and people you know.</p>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <p>
                                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                <span class="float-right">
                                    <a href="#" class="link-black text-sm">
                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                    </a>
                                </span>
                            </p>

                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment" />
                        </div>
                        <div class="post" style="position: relative">
                            <div class="user-block">
                                <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg"
                                    alt="User Image" />
                                <span class="username">
                                    <a href="#" onmouseover="hoverDiv(this)" onmouseleave="mouseLeave(this)">Adam Jones</a>
                                    <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                </span>
                                <span class="description">Posted 5 photos - 5 days ago</span>
                            </div>

                            <div class="popup-account d-none">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/dist/img/logo.jpg" class="post-image" />
                                        <p style="font-weight: bold">Name Here</p>
                                        <p style="font-weight: lighter">
                                            description about the "Name Here"
                                        </p>

                                        <p style="margin-top: 30px; font-weight: bold">
                                            100 Members
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.user-block -->
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="assets/dist/img/logo.jpg" alt="Photo" />
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <img class="img-fluid mb-3" src="assets/dist/img/logo.jpg" alt="Photo" />
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <p>
                                <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                <span class="float-right">
                                    <a href="#" class="link-black text-sm">
                                        <i class="far fa-comments mr-1"></i> Comments (5)
                                    </a>
                                </span>
                            </p>

                            <input class="form-control form-control-sm" type="text" placeholder="Type a comment" />
                        </div>
                        <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <!-- The detail -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-text-width"></i>
                                    Description Horizontal
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-4">Username</dt>
                                    <dd class="col-sm-8">username.</dd>
                                    <dt class="col-sm-4">Full Name</dt>
                                    <dd class="col-sm-8">fullname.</dd>
                                    <dt class="col-sm-4">Division</dt>
                                    <dd class="col-sm-8">CPD</dd>
                                    <dd class="col-sm-8 offset-sm-4">DEV</dd>
                                    <dt class="col-sm-4">Email</dt>
                                    <dd class="col-sm-8">email value</dd>
                                    <dt class="col-sm-4">Telegram Username</dt>
                                    <dd class="col-sm-8">tg username.</dd>
                                    <dt class="col-sm-4">Role</dt>
                                    <dd class="col-sm-8">role.</dd>
                                    <dt class="col-sm-4">Gender</dt>
                                    <dd class="col-sm-8">gender</dd>
                                    <dt class="col-sm-4">Joined At</dt>
                                    <dd class="col-sm-8">created at</dd>
                                </dl>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                        <form class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="username." id="inputName"
                                        placeholder="Username" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" value="email." id="inputName"
                                        placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <p>algorithm:</p>
                                    <p>
                                        Raw passwords are not stored, so there is no way to
                                        see this user’s password, but you can change the
                                        password using
                                        <a data-toggle="modal" data-target="#modal-lg">this form</a>.
                                    </p>
                                </div>
                            </div>

                            <p class="title bg-blue">Personal info</p>

                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="firstname." id="inputName"
                                        placeholder="First Name" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="lastname." id="inputName"
                                        placeholder="Last Name" />
                                </div>
                            </div>

                            <p class="title bg-blue">Permissions</p>

                            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success"
                                style="cursor: pointer">
                                <input type="checkbox" class="custom-control-input" id="switch" style="cursor: pointer" />
                                <label class="custom-control-label" for="switch">Superuser status</label>
                            </div>

                            <p class="title bg-blue">Important dates</p>

                            <div class="form-group row">
                                <label for="inputName2" class="col-sm-2 col-form-label">Last login</label>
                                <div class="col-sm-10">
                                    <input type="datetime" class="form-control" id="inputName2"
                                        placeholder="Last Login" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputName2" class="col-sm-2 col-form-label">Date joined</label>
                                <div class="col-sm-10">
                                    <input type="datetime" class="form-control" id="inputName2"
                                        placeholder="Date joined" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-sm-1 col-sm-10">
                                    <a type="submit" class="btn btn-primary mt-4"> Save </a>

                                    <a type="submit" class="btn btn-danger mt-4 float-right">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
