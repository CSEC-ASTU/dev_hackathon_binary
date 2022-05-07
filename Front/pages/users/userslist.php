<div class="col-md-6 border-right">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List:</h3>
            <div class="card-tools mr-2">
                <button type="button" class="btn btn-tool btn-primary">
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
                        <p class="post-poster" onmouseover="hoverUser(this)" onmouseleave="mouseLeaveUser(this)">Name Here</p>

                        <div class="card-body float-right p-0">
                            <button class="btn btn-tool btn-primary float-right">clickme</button>
                        </div>
                    </div>

                    <div class="popup-account d-none">
                        <div class="card">
                            <div class="card-header">
                                <img src="assets/dist/img/logo.jpg" class="post-image">
                                <p style="font-weight: bold;">Name Here</p>
                                <p style="font-weight: lighter;">description about the "Name Here"</p>

                                <p style="margin-top: 30px; font-weight: bold;">CPD Member</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- user end -->

        </div>
    </div>
</div>