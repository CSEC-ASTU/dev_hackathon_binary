@extends('includes.master')

@section('main-section')
    <div class="col-md-6 border-right">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Messages</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
            </div>
            <!-- /.card-header -->

            <!-- users list -->

            <div class="list">
                <!-- user start -->
                <div class="list-row">
                    <div class="card-body user p-3">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset("assets/dist/img/logo.jpg")}}" class="post-image">
                            <p class="post-poster">Name Here</p>

                            <div class="card-body float-right p-0">
                                <a href="#"
                                    class="btn btn-tool btn-danger float-right">delete</a>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- user end -->

            </div>
        </div>
    </div>
@endsection
