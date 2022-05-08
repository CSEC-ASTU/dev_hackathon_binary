@extends('includes.master')

@section('main-section')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Role</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-widget">
        <div class="card-header">
            <div class="user-block">
                <img class="img-circle" src="assets/dist/img/logo.jpg" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
            </div>
            <!-- /.user-block -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- post text -->
            <p>Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at</p>

            <p>the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.</p>

            <!-- Attachment -->
            <div class="card d-flex flex-column align-items-center">
                <div class="card-header w-75 d-flex justify-content-center">
                    <!-- image is found on the meta of the page -->
                    <img src="https://www.facebook.com/images/fb_icon_325x325.png" style="max-width: 540px !important;">
                </div>
                <div class="card-footer">
                    <!-- url of the page -->
                    <p class="post-link text-light">facebook.com</p>
                    <!-- site name of the page -->
                    <p class="text-bold">Facebook</p>
                    <!-- description of the page. -->
                    <p class="">Log into Facebook to start sharing and connecting with your friends, family,
                        and people you know.</p>
                </div>
            </div>

            <!-- Social sharing buttons -->
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
            <span class="float-right text-muted">45 likes - 2 comments</span>
        </div>
        <!-- /.card-body -->
        <div class="card-footer card-comments">
            <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="assets/dist/img/logo.jpg" alt="User Image">

                <div class="comment-text">
                    <span class="username">
                        Maria Gonzales
                        <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
            </div>
            <!-- /.card-comment -->
            <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="assets/dist/img/logo.jpg" alt="User Image">

                <div class="comment-text">
                    <span class="username">
                        Nora Havisham
                        <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    The point of using Lorem Ipsum is that it hrs a morer-less
                    normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English.
                </div>
                <!-- /.comment-text -->
            </div>
            <!-- /.card-comment -->
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
            <form action="#" method="post">
                <img class="img-fluid img-circle img-sm" src="assets/dist/img/logo.jpg" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                </div>
            </form>
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
