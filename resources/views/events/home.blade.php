@extends('includes.master')

@section('main-section')
    <div class="col-md-6 border-right">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Events</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('feed.add') }}">Add Feed</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post -->
        <div class="post card p-4" style="position: relative;">
            <div class="user-block">
                <img class="img-circle img-bordered-sm" src="assets/dist/img/logo.jpg" alt="user image">
                <span class="username">
                    <a href="#" onmouseover="hoverDiv(this)" onmouseleave="mouseLeave(this)">Jonathan Burke Jr.</a>
                </span>
                <span class="description">Shared publicly - 7:30 PM today</span>
            </div>

            <div class="popup-account d-none">
                <div class="card">
                    <div class="card-header">
                        <img src="assets/dist/img/logo.jpg" class="post-image">
                        <p style="font-weight: bold;">Name Here</p>
                        <p style="font-weight: lighter;">description about the "Name Here"</p>

                        <p style="margin-top: 30px; font-weight: bold;">100 Members</p>
                    </div>
                </div>
            </div>
            <!-- /.user-block -->
            <p>
                Lorem ipsum represents a long-held tradition for designers,
                typographers and the like. Some people hate it and argue for
                its demise, but others ignore the hate as they create awesome
                tools to help create filler text for everyone from bacon lovers
                to Charlie Sheen fans.
            </p>

            <p>
                <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                <span class="float-right">
                    <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (5)
                    </a>
                </span>
            </p>
            <div class="input-group">
                <input type="text" placeholder="Type a comment" class="form-control form-control-sm">
                <span class="input-group-append">
                    <button type="button" class="btn btn-primary btn-sm ">Send</button>
                </span>
            </div>
        </div>
        <!-- /.post -->
    </div>
@endsection
