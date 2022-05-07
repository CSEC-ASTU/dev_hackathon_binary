@extends('includes.master')

@section('main-section')
    <div class="col-md-6 border-right">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Role</h1>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div class="tab-pane">
                    <!-- The detail -->
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">
                          <i class="fas fa-text-width"></i>
                          Role:
                        </h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <dl class="row">
                          <dt class="col-sm-4">Role Name</dt>
                          <dd class="col-sm-8">{{ $role->name }}</dd>
                          <dt class="col-sm-4">Description</dt>
                          <dd class="col-sm-8">{{ $role->name }}</dd>
                          <dt class="col-sm-4">Number of people</dt>
                          <dd class="col-sm-8">{{ $user_count }}</dd>
                        </dl>
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{ route('roles.home') }}" class="btn btn-primary" >Back</a>
            </div>
          </div>
    </div>
@endsection
