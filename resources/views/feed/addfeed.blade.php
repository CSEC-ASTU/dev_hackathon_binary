<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">
            <a href="{{ route('home')}}" class="fas fa-arrow-left mt-2"></a>
              New Feed</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div
      class="widget-user-header text-white"
      style="
        background: url('https://picsum.photos/2000/1320') center center;
        height: 100px;
      "
    >
    </div>
  </div>

  @if (count($errors) > 0)
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

  <div class="card mb-5">
    <!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="active tab-pane" id="activity">
          <!-- Post -->
          <div class="post" style="position: relative">
            <!-- /.user-block -->
            <form action="{{ route('feed.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="title">
                    <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Feed</label>
                    <textarea class="form-control" rows="10" placeholder="Enter ..." name="description"></textarea>
                    <span class="text-danger">@error('description') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="customFile">Additional File</label>

                    <div class="custom-file">
                        <input type="file" multiple class="custom-file-input" id="customFile" name="feed_files[]">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <span class="text-danger">@error('feed_file') {{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label>Event</label>
                    <select class="form-control select2bs4" style="width: 100%;" name="event_id">
                      <option selected="selected"></option>
                      @foreach ($events as $event)
                        <option value="{{ $event->id }}">{{ $event->name }}</option>
                      @endforeach
                    </select>
                    <span class="text-danger">@error('event_id') {{ $message }} @enderror</span>
                  </div>

                <div class="row">
                    <div class="col-md-6">
                        <!-- Date and time -->
                        <div class="form-group">
                            <label>Issue date:</label>
                            <div class="input-group date" id="issuedate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#issuedate" name="issue_date"/>
                                <div class="input-group-append" data-target="#issuedate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('issue_date') {{ $message }} @enderror</span>
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="cursor: pointer;" name="is_public">
                    <label class="form-check-label" for="exampleCheck1" style="cursor: pointer;">Public</label>
                </div>

                <button type="submit" class="btn btn-primary mt-5">Post</button>

            </form>
          </div>
          <!-- /.post -->
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
