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
        <div class="card direct-chat direct-chat-primary" style="height: 75vh;">
            <div class="card-header ui-sortable-handle">
                <div class="d-flex align-items-center">
                    <img class="direct-chat-img mr-3" src="assets/dist/img/logo.jpg" alt="message user image">
                    <h3 class="card-title text-bold">Alexander Pierce</h3>
                </div>


                <div class="card-tools"></div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" style="height: max-content; overflow-x: hidden;">
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                        <!-- /.direct-chat-img -->
                        <div class="direct-chat-text float-left m-0">
                            Is this template really for free? That's unbelievable!
                            <span class="direct-chat-timestamp float-right ml-3" style="font-size: small">23 Jan 2:00
                                pm</span>
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                        <div class="direct-chat-text m-0 float-right">
                            You better believe it!
                            <span class="direct-chat-timestamp float-left mr-3" style="font-size: small">23 Jan 2:05
                                pm</span>
                        </div>
                        <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->
                </div>
                <!--/.direct-chat-messages-->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <form action="#" method="post">
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control" />
                        <span class="input-group-append">
                            <button type="button" class="btn btn-primary">Send</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        @include('messages.nav')
    </div>
@endsection
