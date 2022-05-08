@extends('includes.master')

@section('main-section')
    <div class="col-md-6 border-right">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0"><a class="fas fa-arrow-left mr-2" href="{{ route('divisions.home') }}"></a>New Division</h1>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-5">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post" style="position: relative">
                    <!-- /.user-block -->
                    <form action="">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter ..." name="title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="5" placeholder="Enter ..." name="feed"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-5">Done</button>

                    </form>
                  </div>
                  <!-- /.post -->
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
@endsection
