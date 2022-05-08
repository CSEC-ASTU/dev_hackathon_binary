<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Feeds</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('feed.add') }}">Add Feed</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible m-3">
        <button type="button" class="close text-danger" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="icon fas fa-check"></i> {{ Session::get('success') }}
    </div>
@endif

@foreach ($feeds as $feed)
    <!-- Post -->
    <div class="post card p-4" style="position: relative;">
        <div class="user-block">
            <img class="img-circle img-bordered-sm" src="assets/dist/img/logo.jpg" alt="user image">
            <span class="username">
                <a href="#" onmouseover="hoverDiv(this)" onmouseleave="mouseLeave(this)">{{ $feed->user->detail->first_name}} {{ $feed->user->detail->last_name}} </a>
            </span>
            <span class="description">{{ \Carbon\Carbon::parse($feed->created_at)->format('Y-m-d') }}</span>
        </div>


        <p>
            {{ $feed->description }}
        </p>

        <p>
            <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
            <span class="float-right">
                <a href="#" class="link-black text-sm">
                    <i class="far fa-comments mr-1"></i> Comments ({{ $feed->comments->count() }})
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
@endforeach
