@extends('includes.master')

@section('main-section')
    <div class="col-md-6 border-right">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><a class="fas fa-arrow-left mr-2" href="{{ route('halloffames.home') }}"></a>Add a member to the Hall Of Fame</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header text-white" style="
                    background: url('https://picsum.photos/2000/1320') center center;
                    height: 100px;
                  ">
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
                                    <label>User</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                        <option selected="selected"></option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="10" placeholder="Enter ..." name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="customFile">Image</label>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="file">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label>Project url (if any)</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="title">
                                </div>


                                <div class="form-group">
                                    <label>Issue date:</label>
                                    <div class="input-group date" id="issuedate" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            data-target="#issuedate" name="issue_date" />
                                        <div class="input-group-append" data-target="#issuedate"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
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
    </div>
@endsection
